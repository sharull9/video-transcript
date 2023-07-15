<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function index()
    {
        $data['pageName'] = "setting";
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('setting');
        echo view('Common/page-footer');
    }
}
