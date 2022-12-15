<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddpostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {

    public function index() {

        return view('posts.index', ['data' => Post::orderBy('id', 'desc')->get(), 'users' => User::all()]);
    }

    public function create() {

        return view('posts.create');
    }

    public function store(AddpostRequest $request) {

        $user = Auth::user();
        Post::create([
            'name' => $request->name,
            'full_text' => $request->full_text,
            'image' => $request->file('image')->store('uploads','public'),
            'user_id' => $user->id
        ]);

        return redirect()->route('posts.index');
    }

    public function show(Post $post, User $user) {


        return view('posts.show', ['data' => $post, 'user' => User::find($post->user_id)]);
    }

    public function edit(Post $post) {

        return view('posts.edit', ['data' => $post]);
    }

    public function update(Request $request, Post $post){

        $post->update([
            'name' => $request->name,
            'full_text' => $request->full_text
        ]);

        if($request->has('image')) {

            Storage::disk('public')->delete($post->image);

            $post->update([
                'image' => $request->file('image')->store('uploads', 'public')
            ]);
        };


        return redirect()->route('admin.dashboard');
    }

    public function destroy(Post $post) {

        Storage::disk('public')->delete($post->image);
        $post -> delete();

        return redirect()->route('admin.dashboard');
    }
}
