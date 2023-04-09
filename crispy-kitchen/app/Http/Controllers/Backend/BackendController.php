<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    // Dashboard Page
    public static function dashboard() {
        return view('backend.dashboard');
    }
}
