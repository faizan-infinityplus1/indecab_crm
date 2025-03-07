<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
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
        return [
            'customer_id'  => 'required|integer|exists:mst_customers,id',
            'bookedBy' => 'nullable|array',
            'bookedBy.*.name' => 'required|string',
            'bookedBy.*.phone' => 'required|string|min:10|max:15',
            'bookedBy.*.email' => 'string|email|max:255',
            'bookedBy.*.type' => 'string|string|max:255',
            'from_service' => 'required|string|max:255',
            'to_service' => 'required|string|max:255',
            'vehicle_group' => 'required|integer|exists:mst_cat_veh_groups,id',
            'duty_type' => 'required|integer|exists:mst_duty_types,id',
            'start_date'   => 'required|date|after_or_equal:today',
            'end_date'   => 'required|date|after_or_equal:today',
            'reporting_time' => 'required|string|max:255',
            'drop_time' => 'required|string|max:255',
            'garage_time' => 'required|integer|max:600',
            'reporting_address'   => 'string|max:255',
            'drop_address'   => 'string|max:255',
            'short_reporting_address'   => 'string|max:255',
            'ticketNumber'   => 'string|max:255',
            'bill_to'   => 'string|max:255',
            'price'   => 'required|integer',
            'per_extra_km_rate'   => 'integer',
            'per_extra_hr_rate'   => 'integer',
            'remarks'   => 'string|max:255',
            'operator_notes'   => 'string|max:255',
            'labels'         => 'required|array',
            'labels.*'       => 'integer|exists:labels,id',
            'isConfirmedBooking'   => 'boolean',
        ];
    }
}
