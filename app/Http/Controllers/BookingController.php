<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\BookingBookedBy;
use App\Models\MstCatVehGroup;
use App\Models\MstCustomer;
use App\Models\MstDutyType;
use App\Models\MstMyCompany;
use App\Models\MstLabel;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $bookingId = $request->bookingId ?? -1;
        $booking = Booking::where('id', $bookingId)->with('bookedBy')->first();
        $customers = MstCustomer::where('is_active', true)->with('people')->get();
        $vehicleGroup = MstCatVehGroup::get();
        $dutyTypes = MstDutyType::get();
        $labels = MstLabel::get();
        $mstMyCompany = MstMyCompany::where('is_active', true)->get();
        $defaultCompanyId = MstMyCompany::where('is_active', true)
            ->where('is_primary', true)
            ->value('id') ?? 1;
        return view("backend.admin.duties.booking.manage", compact('booking', 'customers', 'vehicleGroup', 'dutyTypes', 'labels', 'mstMyCompany', 'bookingId', 'defaultCompanyId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        dd(vars: 'i m here');
        //
        try {
            dd($request->attachments);
            // Validate request (handled by FormRequest)
            $validatedData = $request->validated();
            // dd($validatedData);

            // If validation passes, dump the validated data
            $validatedData['labels'] = implode(',', $validatedData['labels'] ?? []);
            // create booking
            $booking = Booking::updateOrCreate(
                [
                    'id' => $request->booking_id,
                ],
                $validatedData
            );
            // create booking customer relationships
            // dd($booking);
            $bookedByCustomer = [
                [
                    'name' => $validatedData['booked_by_customer_name'],
                    'id' => $validatedData['booked_by_id'],
                    'phone' => $validatedData['booked_by_customer_phone'],
                    'email' => $validatedData['booked_by_customer_email'],
                    'type' => $validatedData['type'],
                ]
            ];
            $contacts = $validatedData['contacts'] ?? [];
            $passengers = $validatedData['passengers'] ?? [];

            $mergedContacts = array_merge($bookedByCustomer, $contacts, $passengers);

            foreach ($mergedContacts as $key => $contact) {
                $mergedContacts[$key]['booking_id'] = $booking->id;
            }

            // dd($mergedContacts);

            $existingBookedByCustomer = $booking->bookedBy()->pluck('id')->toArray();
            $submittedBookedByCustomerIds = collect($mergedContacts)->pluck('id')->filter()->toArray();
            $bookedByToDelete = array_diff($existingBookedByCustomer, $submittedBookedByCustomerIds);
            BookingBookedBy::whereIn('id', $bookedByToDelete)->delete();

            foreach ($mergedContacts as $contact) {
                if (isset($contact['id'])) {
                    // Update existing address
                    BookingBookedBy::where('id', $contact['id'])->update($contact);
                } else {
                    // Add new address
                    $booking->bookedBy()->create($contact);
                }
            }
            if ($booking) {
                connectify('success', 'Booking Added', 'Booking has been added successfully !');
            } else {
                connectify('error', 'Booking Added', 'Booking has not been added successfully !');
            }
            return redirect(route('admin.dashboard'));
        } catch (ValidationException $e) {
            // Dump validation errors
            dd($e->errors());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
