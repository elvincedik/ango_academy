<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    //
    public function index(){
        // dd(auth()->user()->name);
        // $user = User::findOrFail(auth()->user()->id);
        // $user = auth()->user();
        // $users = User::all();
        // $blogs = Blog::take(3)->orderBy('created_at', 'desc')->get();
        Paginator::useBootstrap();
        // $blogs = Blog::paginate(5);
        $blogs = Blog::with('category')
                        ->orderBy('created_at', 'desc')
                        ->orderBy('updated_at', 'desc')
                        ->take(15)
                        ->get();

        return view('dashboard')->with (['blogs' => $blogs]);

    }
}
