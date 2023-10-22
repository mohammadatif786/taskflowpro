<?php

namespace App\Http\Controllers;
use App\Models\User;


class LandingPageController extends Controller
{
    public function index()
    {
        $users = User::where('userType','0')->get();
        return view('welcome',compact('users'));
    }
    public function about()
    {
        return view('about');
    }
    public function gallary()
    {
        return view('gallary');
    }
    public function contact()
    {
        return view('contact');
    }
}
