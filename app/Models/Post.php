<?php

namespace App\Models;

use App\Models\User;
use App\Models\File_upload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'image',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function files(){
        return $this->hasMany(File_upload::class);
    }
}
