<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class, 'index'])->name('home');
Route::get('login',  [AdminController::class, 'index'])->name('admin.login');




Route::post('login', [AdminController::class, 'login'])->name("let.login");

#Middleware

    Route::group(['prefix' => 'admin', 'as'=>'admin.'], function(){
        Route::resource('device', 'App\Http\Controllers\DeviceController');
        Route::resource('employee', 'App\Http\Controllers\EmployeeController');

         #Costum
       Route::get('home', [AdminController::class, 'home'])->name('home');



    });
