<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhoWeAre;

class AdminAboutWhoWeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whoWeAre = WhoWeAre::first();
        return view('backend.about_page.who_we_are', [
            'who_we_are' => $whoWeAre
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // first a validate korte hobe

        // dd($request->all());

        $request->validate([
            'title' => 'required',
            // 'sub-title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'nullable'
        ]);

        // file upload method
        $whoWeAre = WhoWeAre::first();
        $whoWeAre->title = $request->title;
        $whoWeAre->sub_title = $request->sub_title;
        $whoWeAre->description = $request->description;

        if($request->hasFile('image') ){
            $path = $request->file('image')->store('image', 'public');
            // $path = $request->file('image')->store('image', 'public'); //mathey rakho
            $whoWeAre->image = $path;
        }

        $whoWeAre->save();

        // return redirect()->route('about.whoWeAre')->with('succes', 'Who We Are Upload Successfully'); 
        return redirect()
            ->route('about.whoWeAre.index')
            ->with('success', 'Who We Are updated successfully');

    }


}
