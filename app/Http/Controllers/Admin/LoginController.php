<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->userType == '1') {

            return  redirect('admin/dashboard');

        }else{

            return view('layouts.component.admin.login');
        }
    }
    public function passwordReset()
    {
        return view('layouts.component.admin.resetpassword');
    }
}
