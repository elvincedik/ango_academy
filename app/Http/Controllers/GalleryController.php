<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //
    public function create(){
        $user = auth()->user();
        return view('posts.upload_gallery', ['user' => $user]);
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

    public function delete($id){
        $galleries = Gallery::findOrFail($id);
        $path = public_path('gallery_images' . $galleries->image);

        if (file_exists($path)) {
            unlink($path);
        }
        $galleries->delete();
        session()->flash('message', 'Image Deleted Successfully');
        return redirect()->back();
    }

}
