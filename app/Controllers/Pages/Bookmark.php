<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Bookmark extends BaseController
{
    public function index()
    {
        $data['pageName'] = "bookmark";
        $data['subPage'] = "bookmark";
        echo view('Common/page-header', $data);
        echo view('Common/navbar');
        echo view('Common/header');
        echo view('bookmark');
        echo view('Common/page-footer');
    }
}
