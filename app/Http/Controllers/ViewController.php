<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class ViewController extends Controller
{
    public function index(){
        $hero=Hero::findOrFail(1);
        return view('index',compact('hero'));
    }
}
