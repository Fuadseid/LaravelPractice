<?php

use App\Http\Controllers\SumController;
use App\Http\Controllers\SubsractController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sum/{a}/{b}', [SumController::class , 'index'])  
  ->whereNumber('a')
->whereNumber('b');
Route::get('/substract/{a}/{b}', [SubsractController::class , 'index'])  
  ->whereNumber('a')
->whereNumber('b');
