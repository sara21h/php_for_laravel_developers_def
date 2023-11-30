<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}