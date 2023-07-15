<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['pageName'] = "admin";
        $data['members'] = $this->memberModel->findAll();
        echo view('Common/page-header', $data);
        echo view('Common/navbar', $data);
        echo view('admin', $data);
        echo view('Common/page-footer', $data);
    }
}
