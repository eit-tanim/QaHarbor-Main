<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminHomeTesimonialController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        
        $testimonials = Testimonial::all();
        return view('backend.testimonial.index', compact('testimonials'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('backend.testimonial.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'position' => 'nullable',
            'image' => 'nullable|image',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->position = $request->position;

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('testimonials');
        }

        $testimonial->save();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'position' => 'nullable',
            'image' => 'nullable|image',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->position = $request->position;

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('testimonials');
        }

        $testimonial->save();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
