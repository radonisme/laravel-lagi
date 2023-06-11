<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/employee', [EmployeeController::class, 'EmployeeAll']);
// Route::get('/employee/{id}', [EmployeeController::class, 'EmployeeOne']);

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee', 'index');
    Route::get('/employee/{id}', 'show');
    Route::post('/employee', 'store');
});

Route::controller(SettingController::class)->group(function () {
    Route::get('/setting', 'index');
    Route::patch('/setting','update');
});

Route::controller(OvertimeController::class)->group(function () {
    Route::get('/overtime/{id}', 'show');
    Route::post('/overtime', 'store');
    Route::get('/overtime-pay/{id}', 'pay');
});
