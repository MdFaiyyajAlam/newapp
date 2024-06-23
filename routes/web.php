<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\AssistantManager\AssistantManagerController;
use App\Http\Controllers\OperationManager\OperationManagerController;
use App\Http\Controllers\OperationTeam\OperationTeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QualityManager\QualityManagerController;
use App\Http\Controllers\QualityTeam\QualityTeamController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\TeamLeader\TeamLeaderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// routes/web.php
Route::middleware(['auth', 'role:9'])->group(function () {
    Route::get('/dashboard/super-admin', [SuperAdminController::class, 'index'])->name('super-admin.dashboard');
    Route::get('/dashboard/super-admin/user-password', [SuperAdminController::class, 'user_password'])->name('super-admin.dashboard.user_password');
});

Route::middleware(['auth', 'role:8'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:7'])->group(function () {
    Route::get('/operation-manager', [OperationManagerController::class, 'index'])->name('operation-manager.dashboard');
});

Route::middleware(['auth', 'role:6'])->group(function () {
    Route::get('/quality-manager', [QualityManagerController::class, 'index'])->name('quality-manager.dashboard');
});

Route::middleware(['auth', 'role:5'])->group(function () {
    Route::get('/quality-team', [QualityTeamController::class, 'index'])->name('quality-team.dashboard');
});

Route::middleware(['auth', 'role:4'])->group(function () {
    Route::get('/operation-team', [OperationTeamController::class, 'index'])->name('operation-team.dashboard');
});

Route::middleware(['auth', 'role:3'])->group(function () {
    Route::get('/assistant-manager', [AssistantManagerController::class, 'index'])->name('assistant-manager.dashboard');
});

Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/team-leader', [TeamLeaderController::class, 'index'])->name('team-leader.dashboard');
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::get('/agent', [AgentController::class, 'index'])->name('agent.dashboard');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
