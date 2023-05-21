<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentLike;
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

    // public function __construct()
    // {
    //     $this->middleware('auth')->only('destroy');
    // }

    public function like(Comment $comment){
        $ipAddress = request()->ip();
        $anonymousUserId = md5($ipAddress); // Generate a hashed version of the IP address as the anonymous user ID

        // Check if the user has already liked the comment
        $existingLike = CommentLike::where('comment_id', $comment->id)
                                ->where('anonymous_user_id', $anonymousUserId)
                                ->first();

        if ($existingLike) {
            // If the user has already liked the comment, delete the like
            $existingLike->delete();
        } else {
            // If the user has not liked the comment yet, create a new like record
            $like = new CommentLike();
            $like->comment_id = $comment->id;
            $like->anonymous_user_id = $anonymousUserId;
            $like->ip_address = $ipAddress;
            $like->save();
        }

        // Get the updated number of likes for the comment
        $numLikes = CommentLike::where('comment_id', $comment->id)->count();

        // Update the comment's like count
        $comment->likes = $numLikes;
        $comment->save();

        // Return the updated comment object as JSON
        // return response()->json($comment);
        session()->put('url.intended', url()->previous());

        return redirect()->back();
    }
}
