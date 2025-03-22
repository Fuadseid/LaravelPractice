<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Home extends Controller
{
    public function index(){
        return View::first(['welcome','home.index']);
    }
}
