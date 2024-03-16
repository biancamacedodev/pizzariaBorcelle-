<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('web.home');
    }

    public function menu() {
        return view('web.menu');
    }

    public function sobre() {
        return view('web.about');
    }

    public function contato() {
        return view('web.contact');
    }
}

