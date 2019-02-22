<?php

namespace App\Http\Controllers\backend\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.dashboard.index');
    }
}
