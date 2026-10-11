<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home', ['title' => 'Dashboard']);
    }

    public function about()
    {
        return view('about', ['title' => 'About Us']);
    }
}