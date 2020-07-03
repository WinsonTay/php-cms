<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AdminsController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        $inputs = request()->validate([
            'title'=>'required|min:5|max:255',
            'post_image'=>'file',
            'body'=>'required'
        ]);

        if (request('post_image')){
            $inputs['post_image'] = request('post_image')->store('images');

        }
        $user = Auth::user();
        $user->posts()->create($inputs);

        return back();
    }


}


