<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function create(){
        return view('posts.upload_gallery');
    }

    public function store(Request $request){
        $valid = $request->validate([
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        $img_dir = $request->file('image')->store('gallery_images', 'public');
        // dd($img_dir);
        Gallery::create(array_merge($valid, ['image' => $img_dir]));
        // Gallery::create($valid);

        session()->flash('message', 'Image Uploaded Successfully!');
        return redirect()->back();
    }
}
