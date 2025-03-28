<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Home extends Controller{
     public function index(){
        if(!View::exists('index')){
            return dd('View does not exist');
        }
        return View::first(['welcome','home.index']);
    } 
    public function home(){
        return view('home.home');
    }
}