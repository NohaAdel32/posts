<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\File_upload;
use App\Traits\Common;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $posts=POST::with('files')->where('user_id',request()->user()->id)->orderBy('created_at', 'desc')->paginate(2);
        return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('addpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'required|string|max:50',
            'body' => 'required|string',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            ]);
            $data['user_id']=$request->user()->id;
            if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, "uploads");
            $data['image'] = $fileName; 
            }
           Post::create($data);
           return redirect()->route('addPost')->with('success', 'Insert Post Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $posts=Post::findOrFail($id);
       return view('editpost', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'title'=>'required|string|max:50',
            'body' => 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            ]);
            $data['user_id']=$request->user()->id;
            if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->image, "uploads");
            $data['image'] = $fileName; 
            }
            Post::where('id', $id)->update($data);
            return redirect()->route('Posts')->with('success', 'Edit Post Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('Posts')->with('danger', 'Delete Data Success');
    }
}
