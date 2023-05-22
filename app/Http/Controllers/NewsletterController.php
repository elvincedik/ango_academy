<?php

namespace App\Http\Controllers;

use session;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
    public function index(){
        $newsletters = Newsletter::orderByDesc('created_at')->get();
        return view('newsletter', ['newsletters' => $newsletters]);
    }

    public function store(Request $request){
        $valid = $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);

        Newsletter::create($valid);

        return redirect()->back()->with('message', 'Email Received');
    }

    public function destroy($id){
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();
        session()->flash('message', 'Email Deleted Successfully!');
        return redirect()->back();

    }

}
