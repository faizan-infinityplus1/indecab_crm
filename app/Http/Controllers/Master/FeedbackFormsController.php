<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackFormsController extends Controller
{
    public function index()
    {
        return view('backend.admin.masters.feedbackforms.index');
    }
    public function manage($id = null)
    {
        return view('backend.admin.masters.feedbackforms.manage');
    }
    public function addField($id = null)
    {
        return view('backend.admin.masters.feedbackforms.add-field');
    }
}
