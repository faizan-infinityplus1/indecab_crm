<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\DutySupporter;
use App\Models\MstCatVehGroup;
use App\Models\MstDutySupporter;
use App\Models\MstDutyType;
use App\Models\MstLabel;
use App\Models\MstSupplier;
use App\Models\MstVehicle;
use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function allotted()
    {
        return view("backend.admin.duties.incoming.incoming");
    }
    public function Attention()
    {
        return view("backend.admin.duties.attention.needAttention");
    }
    public function Upcoming()
    {
        return view("backend.admin.duties.upcoming.upcoming");
    }
    public function Booked()
    {
        $booking = Booking::with('bookedBy')->whereIn('status', ['booked', 'details'])->get();
        return view("backend.admin.duties.booked.index", compact('booking'));
    }
    public function DutyAlloted()
    {
        return view("backend.admin.duties.alloted.alloted");
    }
    public function Dispatched()
    {
        return view("backend.admin.duties.dispatched.dispatched");
    }
    public function Completed()
    {
        return view("backend.admin.duties.completed.completed");
    }
    public function Billed()
    {
        return view("backend.admin.duties.billed.billed");
    }
    public function Cancelled()
    {
        return view("backend.admin.duties.cancelled.cancelled");
    }
    public function All()
    {
        return view("backend.admin.duties.all.all");
    }

    // ================
    // upcomingDuties
    public function upcomingDuties()
    {
        return view("backend.admin.duties.upcoming.index");
    }
    // bookedDuties
    public function bookedDuties()
    {
        $booking = Booking::with('bookedBy', 'customers', 'vehicleGroup', 'vehicleGroup.vehicles', 'dutyType', 'supplier')->whereIn('status', ['booked', 'details'])->get();
        $labels = MstLabel::get();
        return view("backend.admin.duties.booked.index", compact('booking', 'labels'));
    }

    // Manage Labels
    public function editLabels($id)
    {
        $booking = Booking::with(['bookedBy', 'customers', 'vehicleGroup', 'dutyType'])
            ->whereIn('status', ['booked', 'details', 'alloted'])
            ->findOrFail($id);
        return response()->json([
            'booking' => $booking,
        ]);
    }
    public function updateLabels(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $labelsString = implode(',', $request->labels);
        $booking->update([
            'labels' => $labelsString,
        ]);
        connectify('success', 'Labels Modified', 'Duty labels was modified successfully');

        return response()->json([
            'message' => 'Vehicle duty updated successfully!',
            'booking' => $booking, // or $booking->toArray()
        ]);
    }
    // allottedDuties
    public function allottedDuties()
    {
        $booking = Booking::with('bookedBy', 'customers', 'vehicleGroup', 'vehicleGroup.vehicles', 'dutyType', 'supplier')->whereIn('status', ['alloted'])->get();
        $labels = MstLabel::get();

        return view("backend.admin.duties.alloted.index", compact('booking', 'labels'));
    }
    // dispatchedDuties
    public function dispatchedDuties()
    {
        return view("backend.admin.duties.dispatched.index");
    }
    // completedDuties
    public function completedDuties()
    {
        return view("backend.admin.duties.completed.index");
    }
    // billedDuties
    public function billedDuties()
    {
        return view("backend.admin.duties.billed.index");
    }
    // cancelledDuties
    public function cancelledDuties()
    {
        return view("backend.admin.duties.cancelled.index");
    }
    // allDuties
    public function allDuties()
    {
        $bookings = Booking::all();
        $labels = MstLabel::all();
        return view("backend.admin.duties.all.index", compact('bookings', 'labels'));
    }
    // incomingDuties
    public function incomingDuties()
    {
        return view("backend.admin.duties.incoming.index");
    }
    // needsattentionDuties
    public function needsattentionDuties()
    {
        return view("backend.admin.duties.attention.index");
    }

    public function getDetails($id)
    {
        $booking = Booking::with(['bookedBy', 'customers', 'vehicleGroup', 'dutyType'])
            ->whereIn('status', ['booked', 'details', 'alloted'])
            ->findOrFail($id);
        $booking->getLabelDetailsAttribute = $booking->label_details;

        return response()->json([
            ...$booking->toArray(),
            'label_details' => $booking->label_details,
        ]);
    }

    public function editDetails($id)
    {

        $booking = Booking::with(['bookedBy', 'customers', 'vehicleGroup', 'dutyType'])
            ->whereIn('status', ['booked', 'details', 'alloted'])
            ->findOrFail($id);

        $vehicleGroups = MstCatVehGroup::get(['id', 'name']);
        $mstdutyType = MstDutyType::get();

        return response()->json([
            'booking' => $booking,
            'label_details' => $booking->label_details,
            'all_vehicle_groups' => $vehicleGroups,
            'mst_duty_type' => $mstdutyType,
        ]);
    }

    public function allotDetials($id)
    {

        $booking = Booking::with(['bookedBy', 'customers', 'vehicleGroup', 'dutyType'])
            ->whereIn('status', ['booked', 'details', 'alloted'])
            ->findOrFail($id);

        $vehicleGroups = MstCatVehGroup::get(['id', 'name']);
        $mstdutyType = MstDutyType::get();
        $vehicle = MstVehicle::with('mstCatVehGroup', 'mstDriver')->get();
        $supplier = MstSupplier::with('supplierGroups')->get();

        return response()->json([
            'booking' => $booking,
            'label_details' => $booking->label_details,
            'all_vehicle_groups' => $vehicleGroups,
            'mst_duty_type' => $mstdutyType,
            'vehicle' => $vehicle,
            'supplier' => $supplier,
        ]);
    }
    public function manageSupporters(Request $request, $id)
    {
        $booking = Booking::with(['bookedBy', 'customers', 'vehicleGroup', 'dutyType'])
            ->whereIn('status', ['booked', 'details'])
            ->findOrFail($id);
        $supporter = MstDutySupporter::get();
        $supporterAssign = DutySupporter::where('booking_id', $id)->get();

        return response()->json([
            'booking' => $booking,
            'supporter' => $supporter,
            'supporterAssign' => $supporterAssign

        ]);
    }

    public function updateSupporters(Request $request, $id)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'supporters' => 'array',
        ]);
        $bookingId = $request->booking_id;
        $supporters = $request->supporters ?? [];
        DutySupporter::where('booking_id', $bookingId)->delete();

        foreach ($supporters as $supporterId) {
            DutySupporter::create([
                'booking_id' => $bookingId,
                'supporter_id' => $supporterId,
            ]);
        }

        return response()->json(['status' => 'success']);
    }

    public function storeVehicleDuty(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update([
            'vehicle_id' => $request->vehicle_id,
            'driver_id' => $request->driver_id,
            'vehicle_group_id' => $request->vehicle_group_id,
            'status' => 'alloted',
        ]);

        connectify('success', 'Duty Alloted', 'Duty was allotted successfully.');

        return response()->json([
            'message' => 'Vehicle duty updated successfully!',
            'booking' => $booking, // or $booking->toArray()
        ]);
    }

    public function storeSupplierDuty(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $supplier = MstSupplier::findOrFail($request->supplier_id);
        $booking->update([
            'supplier_id' => $request->supplier_id,
            'status' => 'details',
        ]);
        connectify('success', 'Supplier Allotted', 'Supplier was assigned successfully. Vehicles and driver details needed.');

        return response()->json([
            'message' => 'Supplier data updated successfully!',
            'booking' => $booking,
            'supplier' => $supplier,
        ]);
    }


    public function updateParticularDuty(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update([
            'reporting_time' => $request->reporting_time,
            'drop_time' => $request->drop_time,
            'garage_time' => $request->garage_time,
            'vehicle_group' => $request->vehicle_group,
            'duty_type' => $request->duty_type,
            'per_extra_km_rate' => $request->per_extra_km_rate,
            'per_extra_hr_rate' => $request->per_extra_hr_rate,
            'reporting_address' => $request->reporting_address,
            'drop_address' => $request->drop_address,
            'short_reporting_address' => $request->short_reporting_address,
            'remarks' => $request->remarks,
            'ticket_number' => $request->ticket_number,
        ]);
        connectify('success', 'Booking Updated', 'Booking updated succesffully');

        return response()->json([
            'message' => 'Booking updated successfully!',
            'booking' => $booking, // or $booking->toArray()
        ]);
    }

    public function clearAllotment(Request $request, $id)
    {
        $bookingId = $request->id; // or just use $id if it's passed as a route parameter

        // Example using the route parameter $id
        $booking = Booking::where('id', $id)->firstOrFail();

        $booking->supplier_id = null;
        $booking->status = 'booked';
        $booking->save();
        connectify('success', 'Duty Allotment Cleared', 'Duty allotment was cleared successfully.');

        return response()->json(['success' => true, 'message' => 'Supplier cleared successfully.']);
    }
}
