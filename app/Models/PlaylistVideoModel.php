<?php

namespace App\Models;

use CodeIgniter\Model;

class PlaylistVideoModel extends Model
{
    protected $table      = 'playlist_video';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['video_id', 'playlist_id'];
}