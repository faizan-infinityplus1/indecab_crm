<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Validator;

class StoreBookingRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this->all());
        return [
            'customer_id' => 'required|integer|exists:mst_customers,id',
            'company_id' => 'required|integer|exists:mst_my_companies,id',
            'booked_by_id' => 'nullable|integer|exists:booking_booked_bies,id',
            'booked_by_customer_id' => 'required|integer',
            'booked_by_customer_name' => 'required|string',
            'booked_by_customer_phone' => 'string|min:10|max:15',
            'booked_by_customer_email' => 'string|email|max:255',
            'type' => 'string|max:255',
            'contacts' => 'nullable|array',
            'contacts.*.id' => 'nullable|integer|exists:booking_booked_bies,id',
            'contacts.*.name' => 'required|string',
            'contacts.*.phone_no' => 'string|min:10|max:15',
            'contacts.*.email' => 'string|email|max:255',
            'contacts.*.type' => 'string|string|max:255',
            'passengers' => 'nullable|array',
            'passengers.*.id' => 'nullable|integer|exists:booking_booked_bies,id',
            'passengers.*.name' => 'required|string',
            'passengers.*.phone_no' => 'string|min:10|max:15',
            'passengers.*.email' => 'string|email|max:255',
            'passengers.*.type' => 'string|string|max:255',
            'from_service' => 'required|string|max:255',
            'to_service' => 'required|string|max:255',
            'vehicle_group' => 'required|integer|exists:mst_cat_veh_groups,id',
            'duty_type' => 'required|integer|exists:mst_duty_types,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:today',
            'reporting_time' => 'required|string|max:255',
            'drop_time' => 'string|max:255',
            'garage_time' => 'required|integer|max:600',
            'reporting_address' => 'string|max:255',
            'drop_address' => 'nullable|string|max:255',
            'short_reporting_address' => 'nullable|string|max:255',
            'ticket_number' => 'nullable|string|max:255',
            'bill_to' => 'string|max:255',
            'price' => 'required|integer',
            'per_extra_km_rate' => 'nullable|integer',
            'per_extra_hr_rate' => 'nullable|integer',
            'remarks' => 'nullable|string|max:255',
            'driver_remark' => 'nullable|string|max:255',
            'operator_notes' => 'nullable|string|max:255',
            'labels' => 'nullable|array',
            'labels.*' => 'integer|exists:mst_labels,id',
            'is_confirmed_booking' => 'boolean',
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                // dd(request()->all());
                            connectify('error', 'Add Booking', $validator->errors()->first());

                Log::info(['after' => $this->all(), 'errors' => $validator->errors()]);
                // dd($validator->errors());
            }

        ];
    }
}
