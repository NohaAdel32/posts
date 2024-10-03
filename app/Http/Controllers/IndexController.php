<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function home()
    {$posts= $posts=POST::orderBy('created_at', 'desc')->paginate(4);
       return view('index', compact('posts'));
    } 
}
