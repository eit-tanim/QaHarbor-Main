<?php

namespace App\Http\Controllers\Backend;

use App\Http\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\BlogCard;
use Illuminate\Http\Request;

class BlogCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_card = BlogCard::all();
        // dd($blog_card);
        return view('backend.blog_card.index', compact('blog_card'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog_card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

    

        $blog_card = new BlogCard();
        $blog_card->title = $request->title;
        $blog_card->description = $request->description;

        // $folder = 'upload/storage';
        // dd("asdasd");

    
        if ($request->hasFile('image'))
        {
            // dd("ASDAHSKJDh");
            $blog_card->image = ImageHelper::storeImage($request->file('image'));
        }
    
        $blog_card->save();

        // dd($request->all());
    
        return redirect()
            ->route('blog_card.index')
            ->with('success', 'Blog card created successfully.');
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
    public function edit($id)
    {
        $blog_card = BlogCard::findOrFail($id);
        // dd($blog_card);
        return view('backend.blog_card.edit', compact('blogCard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $blog_card = BlogCard::findOrFail($id);
        $blog_card->title = $request->title;
        $blog_card->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/storage'), $filename);
            $blog_card->image = $filename;
        }

        $blog_card->save();

        return redirect()->route('blog_card.index')->with('success', 'Blog card updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog_card = BlogCard::findOrFail($id);

        if (file_exists(public_path('upload/blog_images/' . $blog_card->image))) {
            unlink(public_path('upload/blog_images/' . $blog_card->image));
        }

        $blog_card->delete();
        return redirect()->back()->with('success', 'Blog card deleted successfully.');
    }
}
