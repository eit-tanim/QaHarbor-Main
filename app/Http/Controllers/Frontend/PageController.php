<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function JobPage(){
        return view('frontend.pages.job');
    }

    public function SqaServices(){
        return view('frontend.pages.sqa_services');
    }

    public function SqaExpert(){
        return view('frontend.pages.sqa_experts');
    }

    public function AboutPage(){
        return view('frontend.pages.about');
    }

    public function BlogPage(){
        return view('frontend.pages.blog');
    }

    public function Consultation(){
        return view('frontend.pages.free_consultation');
    }
    
    
}
