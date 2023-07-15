<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        echo view('Common/auth-header');
        echo view('Auth/login');
        echo view('Common/auth-footer');
    }

    public function withOtp()
    {
        echo view('Common/auth-header');
        echo view('Auth/login-otp');
        echo view('Common/auth-footer');
    }

}
