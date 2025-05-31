<?php

namespace App\Http\Controllers\Operations;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\BookingAttachment;
use App\Models\BookingBookedBy;
use App\Models\MstCustomer;
use App\Models\MstCatVehGroup;
use App\Models\MstDutyType;
use App\Models\MstLabel;
use App\Models\MstMyCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class BookingsController extends Controller
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
        return view("backend.admin.duties.addBooking.manage", compact('booking', 'customers', 'vehicleGroup', 'dutyTypes', 'labels', 'mstMyCompany', 'bookingId', 'defaultCompanyId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        try {
            // Validate request (handled by FormRequest)
            $validatedData = $request->validated();

            // Normalize labels
            $validatedData['labels'] = implode(',', $validatedData['labels'] ?? []);

            // Create or update booking
            $booking = Booking::updateOrCreate(
                [
                    'id' => $request->booking_id,
                ],
                $validatedData
            );

            // Prepare bookedByCustomer array
            $bookedByCustomer = [
                [
                    'name' => $validatedData['booked_by_customer_name'],
                    'id' => $validatedData['booked_by_id'],
                    'phone_no' => $validatedData['booked_by_customer_phone'],
                    'email' => $validatedData['booked_by_customer_email'],
                    'type' => $validatedData['type'],
                ]
            ];

            $contacts = $validatedData['contacts'] ?? [];
            $passengers = $validatedData['passengers'] ?? [];

            // Normalize 'phone' to 'phone_no' in contacts and passengers
            foreach ($contacts as &$contact) {
                if (isset($contact['phone'])) {
                    $contact['phone_no'] = $contact['phone'];
                    unset($contact['phone']);
                }
            }

            foreach ($passengers as &$passenger) {
                if (isset($passenger['phone'])) {
                    $passenger['phone_no'] = $passenger['phone'];
                    unset($passenger['phone']);
                }
            }

            $mergedContacts = array_merge($bookedByCustomer, $contacts, $passengers);

            // Assign booking_id to each contact
            foreach ($mergedContacts as $key => $contact) {
                $mergedContacts[$key]['booking_id'] = $booking->id;
            }

            Log::info('merge contacts: ', ['mergeContacts' => $mergedContacts]);

            // Delete removed contacts
            $existingBookedByCustomer = $booking->bookedBy()->pluck('id')->toArray();
            $submittedBookedByCustomerIds = collect($mergedContacts)->pluck('id')->filter()->toArray();
            $bookedByToDelete = array_diff($existingBookedByCustomer, $submittedBookedByCustomerIds);
            BookingBookedBy::whereIn('id', $bookedByToDelete)->delete();

            // Create or update contacts
            foreach ($mergedContacts as $contact) {
                if (isset($contact['id'])) {
                    BookingBookedBy::where('id', $contact['id'])->update($contact);
                } else {
                    $booking->bookedBy()->create($contact);
                }
            }

            // Attachment logic

            // $filePath = '';
            // if ($request->hasFile("booking_attachments")) {
            //     $file = $request->file("booking_attachments");
            //     $filePath = $file->store('mydriver-images', 'public');
            // }


            $attachment = BookingAttachment::where('booking_id', $booking->id)->first();

            if ($attachment) {


                // Delete the old file from storage
                Storage::disk('public')->delete($attachment->file_path);

                // Store the new file
                $newFile = $request->file('file');
                $newFilePath = $newFile->store('mydriver-images', 'public');

                // Update the attachment details in the database
                $attachment->update([
                    'file_name' => $newFile->getClientOriginalName(),
                    'file_path' => $newFilePath,
                    'file_size' => $newFile->getSize(),
                    'file_type' => $newFile->getMimeType(),
                ]);

                return response()->json(['success' => 'Attachment updated successfully.']);
            }

            if ($request->hasFile("attachments")) {
                foreach ($request->file("attachments") as $file) {
                    // Store the file in the 'mydriver-images' directory within the 'public' disk
                    $filePath = $file->store('mydriver-images', 'public');

                    // Save file details to the booking_attachments table
                    BookingAttachment::create([
                        'booking_id' => $booking->id, // Assuming $booking is the created/updated booking
                        'file_name' => $file->getClientOriginalName(),
                        'file_path' => $filePath,
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getMimeType(),
                    ]);
                }
            }

            if ($booking) {
                connectify('success', 'Booking Added', 'Booking has been added successfully!');
            } else {
                connectify('error', 'Booking Error', 'Booking was not added!');
            }

            return redirect(route('admin.dashboard'));
        } catch (ValidationException $e) {
            dd($e->errors()); // Dump validation errors
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
    public function allBookings()
    {
        $data = Booking::all();
        // $customers = MstCustomer::all();
        // $customers = MstCustomer::with('booking')->get();
        $bookings = Booking::with("customers")->get();
        // dd($bookings);
        // dd($data);
        $vehicleGroup = MstCatVehGroup::get();
        $dutyTypes = MstDutyType::get();
        $labels = MstLabel::get();
        $mstMyCompany = MstMyCompany::where('is_active', true)->get();
        return view("backend.admin.Operations.bookings.all.index", compact("data", 'bookings', 'vehicleGroup', 'dutyTypes', 'labels'));
    }
    public function bookedBookings()
    {
        return view("backend.admin.Operations.bookings.booked.index");
    }
    public function onGoingBookings()
    {
        return view("backend.admin.Operations.bookings.onGoing.index");
    }
    public function completedBookings()
    {
        return view("backend.admin.Operations.bookings.completed.index");
    }
    public function billedBookings()
    {
        return view("backend.admin.Operations.bookings.billed.index");
    }
    public function cancelledBookings()
    {
        return view("backend.admin.Operations.bookings.cancelled.index");
    }
    public function specificBookings(Request $request)
    {

        $booking = Booking::with(['bookedBy', 'customers', 'vehicleGroup', 'dutyType'])
            ->where('status', 'booked')
            ->findOrFail($request->id);
        $booking->getLabelDetailsAttribute = $booking->label_details;


        return view("backend.admin.operations.bookings.specificBookings.index", compact('booking'));
    }
}
