<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutBanner;
use Illuminate\Http\Request;

class AboutBannerController extends Controller
{
    public function index(){
        $aboutBanner = AboutBanner::first();
        // dd('askdjaslkdaslkdj');
        return view('backend.about_page.about_banner');
    }
}
