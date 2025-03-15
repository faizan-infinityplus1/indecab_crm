<?php

namespace App\Http\Controllers\Operations;

use App\Http\Controllers\Controller;
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
    public function Receipt()
    {
        return view("backend.admin.Operations.receipt.receipt");
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
