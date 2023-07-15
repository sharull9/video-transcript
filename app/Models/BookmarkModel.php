<?php

namespace App\Models;

use CodeIgniter\Model;

class BookmarkModel extends Model
{
    protected $table      = 'bookmark';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['video_id', 'user_id'];
}