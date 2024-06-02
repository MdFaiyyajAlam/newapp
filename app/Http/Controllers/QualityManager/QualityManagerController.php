<?php

namespace App\Http\Controllers\QualityManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QualityManagerController extends Controller
{
    //
    public function index()
    {
        return view('dashboards.QualityManager.quality_manager');
    }
}
