<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\ImageHelper;
use App\Models\HomeBanner;
use Illuminate\Http\Request;

class AdminHomeBannerController extends Controller
{
    // index
    public function Index()
    {
        $home_banner = HomeBanner::first();
        // dd($home_banner);
        return view('admin.pages.home_banner', compact('home_banner'));
    }

    // update
    public function BannerUpdate(Request $request)
    {
        // dd($request->all()); 
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'photo' => 'required|image|mimes:jpeg,JPG,jpg,png',
        ]);

        
        $home_banner = HomeBanner::first();
        $home_banner->title = $request->title;
        $home_banner->sub_title = $request->sub_title;


        if ($request->hasFile('photo')) {
            

            // if (file_exists(public_path($home_banner->photo))) {
            //     unlink(public_path($home_banner->photo));
            // }

            // $file_name = hexdec(uniqid()) . '.' . $request->file('photo')->getClientOriginalExtension();

            // $request->file('photo')->move(public_path('uploads/'), $file_name);
            // $save_url = 'uploads/' . $file_name;
            // $home_banner->photo = $save_url;

            $file = $request->file('photo');
                
            $home_banner->photo = ImageHelper::storeImage($file);
        }

        $home_banner->update();
        return redirect()->route('admin.home-banner');
    }
}
