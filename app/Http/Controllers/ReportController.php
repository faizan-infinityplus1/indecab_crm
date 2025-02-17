<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    
    public function index()
    {
        return view('backend.reports.index');
    }
    public function recent()
    {
        return view('backend.reports.recent');
    }
    public function manage()
    {
        return view('backend.reports.manage');
    }
}
