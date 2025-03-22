<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\SumController;
use App\Http\Controllers\SubsractController;

use Illuminate\Support\Facades\Route;

Route::get("/",[Home::class,"index"])->name("home");