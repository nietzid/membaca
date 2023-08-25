<?php

namespace App\Controllers;

use App\Models\CeritaModel;

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
    
}
