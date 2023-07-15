<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;

class ForgetPassword extends BaseController
{

    public function index()
    {
        echo view('Common/auth-header');
        echo view('Auth/Forget_Password/step1');
        echo view('Common/auth-footer');
    }
}
