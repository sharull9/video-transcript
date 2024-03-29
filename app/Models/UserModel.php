<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'email', 'phone_number', 'password', 'role'];
}