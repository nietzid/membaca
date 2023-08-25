<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }

    public function materi(): string
    {
        return view('materi');
    }
}
