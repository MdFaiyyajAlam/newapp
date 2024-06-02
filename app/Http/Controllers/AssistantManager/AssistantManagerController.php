<?php

namespace App\Http\Controllers\AssistantManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssistantManagerController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.AssistantManager.assistant_manager');
    }
}
