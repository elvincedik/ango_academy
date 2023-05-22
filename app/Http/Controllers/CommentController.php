<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request){
                $valid = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'blog_id' => 'required|exists:blogs,id',
                'comments' => 'required|max:2000',
            ]);

            Comment::create($valid);

            session()->flash('message', 'Commented!');
            return redirect()->back();
    }

    public function delete($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return back()->with('message', 'Comment deleted successfully.');
    }

}
