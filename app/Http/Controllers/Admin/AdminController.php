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
     public function portfolio(){
        return view('admin.portfolio');
    }
     public function resume(){
        return view('admin.resume');
    }
     public function services(){
        return view('admin.services');
    }
     public function settings(){
        return view('admin.settings');
    }
     public function skills(){
        return view('admin.skills');
    }
      public function contact(){
        return view('admin.contact');
    }

}
