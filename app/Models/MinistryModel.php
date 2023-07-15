<?php

namespace App\Models;

use CodeIgniter\Model;

class MinistryModel extends Model
{
    protected $table      = 'ministry';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'url', 'icon'];
}