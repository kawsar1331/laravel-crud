<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Index Page 
    public static function index() {
        return view('frontend.index');
    }

    // Story Page 
    public static function story() {
        return view('frontend.story');
    }

    // Menu Page 
    public static function menu() {
        return view('frontend.menu');
    }

    // News Page 
    public static function news() {
        return view('frontend.news');
    }

    // Contact Page 
    public static function contact() {
        return view('frontend.contact');
    }

    // News Details Page 
    public static function newsdetails() {
        return view('frontend.newsdetails');
    }
}
