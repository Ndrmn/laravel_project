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


}
