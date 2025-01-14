<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    //
    public function index(){
        $blogs = Blog::whereHas('category', function ($query) {
            $query->where('name', 'Blog');
        })
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

        $galleries = Gallery::orderBy('created_at', 'desc')->take(3)->get();
        // $blogs = Blog::all()->sortByDesc(function ($item) {
        //     return $item->updated_at ?? $item->created_at;
        // })->take(3);
        // $blogs = Blog::all();
        // dd($blogs);
        return view('index')->with(['blogs' => $blogs, 'galleries' => $galleries]);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }


    public function management(){
        return view('pages.management');
    }

    public function gallery(){
        $galleries = Gallery::orderBy('created_at', 'desc')->take(9)->get();

        return view('pages.gallery')->with(['galleries' => $galleries]);
    }

    public function newsBlog(){
        $blogs = Blog::whereHas('category', function ($query) {
            $query->where('name', 'Blog');
        })
        ->orderBy('created_at', 'desc')
        ->take(9)
        ->get();

        $news = Blog::whereHas('category', function ($queryNews){
            $queryNews->where('name', 'News');
        })
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();

        return view('pages.newsblog')->with(['blogs' => $blogs, 'news' => $news]);
    }

    public function show($id){
        $blog = Blog::findOrFail($id);
        $comments = Comment::all();
        // $comment = Comment::where('post_id', $id)->get();
        // return view('post', ['comments' => $comment]);
        return view('posts.blog', compact('blog', 'comments'));
    }

    public function fullPage(){
        $galleries = Gallery::all();
        return view('pages.full_image', ['galleries' => $galleries]);
    }
}
