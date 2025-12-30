<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero=Hero::findOrFail(1);
        return view('admin.hero', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hero=Hero::findOrFail($id);
        $data=$request->validate([
        'main'=>'required|string|max:255',
        'subtitle'=>'required|string|max:255',
        'description'=>'required',
        'project'=>'required',
        'experince'=>'required',
        'clients'=>'required',
        'image'=>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);
       


        if($request->hasFile('image')){
            $image=$request->file('image');

            $new_name="hero".time().".".$image->getClientOriginalExtension();

            if($hero->image && Storage::exists('public/heroes/'.$hero->image)){
                Storage::delete('public/heroes/'.$hero->image);
            }
                $image->storeAs('public/heroes', $new_name);
                $data['image'] = $new_name;
        }


        $hero->update($data);
        return redirect()->back()->with('success', 'Yangilandi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
