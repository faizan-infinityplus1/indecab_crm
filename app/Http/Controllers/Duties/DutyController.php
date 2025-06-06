<?php

namespace App\Http\Controllers\Duties;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\MstCatVehGroup;
use App\Models\MstDutyType;
use App\Models\MstLabel;
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
        $booking = Booking::with('bookedBy')->where('status', 'booked')->get();
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
        $booking = Booking::with('bookedBy', 'customers', 'vehicleGroup', 'dutyType')->where('status', 'booked')->get();
        return view("backend.admin.duties.booked.index", compact('booking'));
    }
    // allottedDuties
    public function allottedDuties()
    {
        return view("backend.admin.duties.alloted.index");
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
            ->where('status', 'booked')
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
            ->where('status', 'booked')
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
            ->where('status', 'booked')
            ->findOrFail($id);

        $vehicleGroups = MstCatVehGroup::get(['id', 'name']);
        $mstdutyType = MstDutyType::get();
        $vehicle = MstVehicle::with('mstCatVehGroup','mstDriver')->get();
        return response()->json([
            'booking' => $booking,
            'label_details' => $booking->label_details,
            'all_vehicle_groups' => $vehicleGroups,
            'mst_duty_type' => $mstdutyType,
            'vehicle' => $vehicle,
        ]);
    }
}
