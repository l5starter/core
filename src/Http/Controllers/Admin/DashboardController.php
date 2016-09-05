<?php

namespace L5Starter\Core\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('l5starter::admin.dashboard.index');
    }
}
