<?php

use App\Http\Controllers\OutletController;
use App\Models\Outlet;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/outlets', OutletController::class);