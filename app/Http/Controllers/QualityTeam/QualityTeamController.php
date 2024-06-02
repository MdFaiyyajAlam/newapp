<?php

namespace App\Http\Controllers\QualityTeam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QualityTeamController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.QualityTeam.quality_team');
    }
}
