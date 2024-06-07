<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscuterController extends Controller
{
    public function index()
    {
        return view('discuter');
    }
}
