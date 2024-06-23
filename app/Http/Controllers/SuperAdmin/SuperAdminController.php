<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.SuperAdmin.super_admin');
    }

    public function user_password(){
        $results = DB::table('users')
            ->join('user_passwords', 'users.id', '=', 'user_passwords.user_id')
            ->select('users.id', 'users.name', 'users.email', 'user_passwords.password', 'user_passwords.updated_at')
            ->get();
        return view('dashboards.SuperAdmin.show_password',compact('results'));
    }
}
