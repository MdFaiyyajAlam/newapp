<?php

namespace App\Http\Controllers\OperationManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperationManagerController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.OperationManager.operation_manager');
    }
}
