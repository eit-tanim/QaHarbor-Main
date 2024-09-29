<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;

class AdminHomeBannerController extends Controller
{
    public function Index(){
        $home_banner = HomeBanner::first();
        return view('admin.pages.home_banner', compact('home_banner'));
    }


    public function BannerUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        $home_banner = HomeBanner::first();
        $home_banner->title = $request->title;
        $home_banner->sub_title = $request->sub_title;
        if ($request->file('photo')) {
                $request->validate([
                    'photo' => 'required|image|mimes:jpeg,JPG,jpg,png,gif,svg,webp,bmp',
                ]);
    
                if (file_exists(public_path($home_banner->photo))) {
                    unlink(public_path($home_banner->photo));
                }

                $file_name = hexdec(uniqid()) . '.' . $request->file('photo')->getClientOriginalExtension();
         
                $request->file('photo')->move(public_path('uploads/'), $file_name);
                $save_url = 'uploads/' . $file_name;
                $home_banner->photo = $save_url;
            
        }
        $home_banner->update();
        return redirect()->route('admin.home-banner');


    }
}
