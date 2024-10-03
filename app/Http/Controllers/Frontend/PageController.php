<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use App\Models\AboutBanner;
use App\Models\Blog;
use App\Models\WhoWeAre;

class PageController extends Controller
{
    public function JobPage()
    {
        return view('frontend.pages.job');
    }

    public function SqaServices()
    {
        return view('frontend.pages.sqa_services');
    }

    public function SqaExpert()
    {
        return view('frontend.pages.sqa_experts');
    }

    public function AboutPage()
    {
        $about_banner = AboutBanner::first(); 
        // $whoWeAre = WhoWeAre::first();
        return view('frontend.pages.about', compact('about_banner'));
    }


    public function BlogPage()
    {
        $blogs = Blog::all();
    return view('frontend.pages.blog', compact('blogs'));
    }

    public function Consultation()
    {
        return view('frontend.pages.free_consultation');
    }
}
