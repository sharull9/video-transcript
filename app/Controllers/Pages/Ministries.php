<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;

class Ministries extends BaseController
{
    public function index()
    {
        $data['ministries'] = $this->ministryModel->findAll();
        $data['pageName'] = "ministries";
        echo view('Common/page-header', $data);
        echo view('Common/navbar', $data);
        echo view('Common/header', $data);
        echo view('Categories/ministries', $data);
        echo view('Common/page-footer');
    }
}
