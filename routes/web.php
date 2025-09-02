<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::controller(CustomerController::class)->group(function() {
    route::get('/customer/home', 'home')->name('customer.home');
});
