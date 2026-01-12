<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        $message=Contact::orderBy('id','desc')->paginate(10);
        return view('admin.message.contact',compact('message'));
    }
    public function create(Request $request){
        $validated=$request->validate([
            'name'=>'required|min:3|max:30',
            'email'=>'required|email',
            'subject'=>'required|max:250',
            'message'=>'required'
        ]);

        $contact=new Contact([
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'subject'=>$request->post('subject'),
            'message'=>$request->post('message')
        ]);
        $contact->save();
        return redirect()->back()->with('success','xabar yuborildi');

    }

}
