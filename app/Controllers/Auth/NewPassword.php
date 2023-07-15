<?php

namespace App\Controllers\Auth;
use App\Controllers\BaseController;

class NewPassword extends BaseController
{
    public function index()
    {
        echo view('Common/auth-header');
        echo view('Auth/Forget_Password/step2');
        echo view('Common/auth-footer');
    }
}
