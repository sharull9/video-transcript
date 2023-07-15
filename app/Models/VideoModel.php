<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table      = 'video';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['title', 'description', 'transcript', 'date', 'house', 'member_id', 'tags'];
}