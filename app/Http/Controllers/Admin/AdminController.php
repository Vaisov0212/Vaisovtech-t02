<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('admin.index');
    }
    public function hero(){
        return view('admin.hero');
    }
     public function portifolio(){
        return view('admin.index');
    }
     public function resume(){
        return view('admin.index');
    }
}
