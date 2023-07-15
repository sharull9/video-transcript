<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table      = 'portfolio';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['member_id', 'ministry_id'];
}