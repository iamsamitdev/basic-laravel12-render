<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showprofile() {
        return 'Hello, I am a Laravel Developer';
    }

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
