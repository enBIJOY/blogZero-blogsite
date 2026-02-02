<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function about(){
        return view('frontend.about');
    }
    public function newsletter(){
        return view('frontend.newsletter');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function skills(){
        return view('frontend.skill');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
