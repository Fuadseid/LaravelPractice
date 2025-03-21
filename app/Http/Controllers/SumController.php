<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index($a,$b){
     return $a+$b;
    }
}
