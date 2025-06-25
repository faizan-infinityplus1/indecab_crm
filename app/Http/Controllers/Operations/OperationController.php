<?php

namespace App\Http\Controllers\Operations;

use App\Http\Controllers\Controller;
use App\Models\MstMyCompany;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function Availability()
    {
        return view("backend.admin.Operations.availability.availability");
    }
    public function Bookings()
    {
        return view("backend.admin.Operations.bookings.bookings");
    }
    public function Billed()
    {
        return view("backend.admin.Operations.billed.billed");
    }
    public function receipt()
    {
        return view("backend.admin.Operations.receipt.index");
    }
    
    public function create()
    {
        $mstMyCompany = MstMyCompany::where('is_active', true)->get();
        $defaultCompanyId = MstMyCompany::where('is_active', true)
            ->where('is_primary', true)
            ->value('id') ?? 1;
        return view("backend.admin.Operations.receipt.create" , compact('mstMyCompany', 'defaultCompanyId'));
    }

    public function PaymentGateway()
    {
        return view("backend.admin.Operations.paymentGateway.paymentGateway");
    }
    public function PurchasedDuty()
    {
        return view("backend.admin.Operations.purchasedDuty.purchasedDuty");
    }
    public function PurchasedInvoice()
    {
        return view("backend.admin.Operations.purchasedInvoice.purchasedInvoice");
    }
    public function PurchasedPayment()
    {
        return view("backend.admin.Operations.purchasedPayment.purchasedPayment");
    }
}
