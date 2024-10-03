<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Traits\Common;
use App\Models\File_upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $posts=Post::findOrFail($id);
        return view('file_upload', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',  
            'post_id' => 'required|exists:posts,id',
        ]);
        if ($request->hasFile('file')) {
           
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('upload', $fileName, 'public');
            File_upload::create([
                'name' => $fileName,
                'file_path' => $filePath,
                'post_id'=>$request->post_id,
            ]);
            
           return redirect()->back()->with('success', 'File uploaded successfully!');
        }

        return redirect()->back()->withErrors('File upload failed!');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(File_upload $file_upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File_upload $file_upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File_upload $file_upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File_upload $file_upload)
    {
        //
    }
}
