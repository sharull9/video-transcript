<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Archives extends BaseController
{
    public function index()
    {
        $data['pageName'] = "archives";
        $data['subPage'] = "archives";
        echo view('Common/page-header', $data);
        echo view('Common/navbar', $data);
        echo view('Common/header', $data);
        echo view('archives', $data);
        echo view('Common/page-footer', $data);
    }
}
