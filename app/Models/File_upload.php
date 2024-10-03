<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File_upload extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'file_path','post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
