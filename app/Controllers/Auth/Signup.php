<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Signup extends BaseController
{
    public function index()
    {
        echo view('Common/auth-header');
        echo view('Auth/signup');
        echo view('Common/auth-footer');
    }
}
