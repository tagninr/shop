<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {

    }
}
