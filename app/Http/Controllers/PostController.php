<?php

namespace App\Http\Controllers;

use App\Models\Interests;
use App\Models\Language;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'posts' => Post::where('user_id', Auth::id())->latest()->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('components.show', [
            'post' => $post
        ]);
    }

    public function add()
    {
        return view('components.addSomeone', [
            'languages' => Language::all(),
            'interests' => Interests::orderBy('interest_name', 'ASC')->get()
        ]);
    }

}

