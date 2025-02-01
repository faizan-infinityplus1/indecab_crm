<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankAccountsController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.bankaccounts.index');
    }
    public function manage($id = null)
    {
        return view('backend.admin.masters.bankaccounts.manage');
    }
}
