<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutUs(){
    	return view('frontend.aboutUs');
    }

    public function home(){
    	return view('frontend.home');
    }

    public function campaign(){
    	return view('frontend.campaign');
    }

    public function events(){
    	return view('frontend.events');
    }

    public function eventDetail(){
    	return view('frontend.eventDetail');
    }

    public function blog(){
    	return view('frontend.blog');
    }

    public function blogDetail(){
    	return view('frontend.blogDetail');
    }

    public function service(){
    	return view('frontend.service');
    }

    public function operationalVideo(){
    	return view('frontend.operationalVideo');
    }

    
}
