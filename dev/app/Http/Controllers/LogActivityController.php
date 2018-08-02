<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogActivityController extends Controller
{
    public function log_activity()
    {
        return view('log_activity.log_activity');
    }
}
