<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class, 'index'])->name('home');
Route::get('login',  [AdminController::class, 'index'])->name('admin.login');




Route::post('login', [AdminController::class, 'login'])->name("let.login");

#Middleware

    Route::group(['prefix' => 'admin', 'as'=>'admin.'], function(){
        #Costum
        Route::get('home', [AdminController::class, 'home'])->name('home');
        Route::any('list', [App\Http\Controllers\EmployeeController::class, 'list'])->name('list');

        Route::resource('employee', 'App\Http\Controllers\EmployeeController');
        Route::resource('device', 'App\Http\Controllers\DeviceController');






    });
