<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutBanner;
use Illuminate\Http\Request;

class AboutBannerController extends Controller
{
    public function index(){
        $aboutBanner = AboutBanner::first(); // Fetch the first banner, assuming there's only one
        return view('backend.about_page.about_banner');
    }
}
