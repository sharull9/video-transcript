<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaylistModel extends Model
{
    protected $table      = 'playlist';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['title', 'url', 'user_id'];
}