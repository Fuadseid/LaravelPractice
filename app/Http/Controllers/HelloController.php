<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('home.hello',[
            'name'=>'<i>Fuad</i>',
            'surname'=>'Seid',
            'country'=> 'Ethiopia',
            'hobbies'=>['Listening to music','Reading books','Watching movies']
        ]);
    }
}
