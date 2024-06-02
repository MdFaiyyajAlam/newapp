<?php

namespace App\Http\Controllers\OperationTeam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperationTeamController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.OperationTeam.operation_team');
    }
}
