<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublierController extends Controller
{
    public function index()
    {
        return view('publier');
    }
}
