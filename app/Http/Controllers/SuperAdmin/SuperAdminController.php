<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.SuperAdmin.super_admin');
    }
}
