<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddpostRequest;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller {

    public function index() {

        return view('admin.dashboard', ['posts' => Post::orderBy('id', 'asc')->get(), 'users' => User::orderBy('id', 'asc')->get()]);
    }

//    public function create() {
//
//        return view('posts.create');
//    }
//
//    public function store(AddpostRequest $request) {
//
//        Post::create([
//            'name' => $request->name,
//            'full_text' => $request->full_text,
//            'image' => $request->file('image')->store('uploads','public')
//        ]);
//
//        return redirect()->route('posts.index');
//    }
//
//    public function show(Post $post) {
//
//        return view('posts.show', ['data' => $post]);
//    }
}
