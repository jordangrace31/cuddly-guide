<?php

namespace App\Http\Controllers;

use App\Models\Interests;
use App\Models\Language;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'posts' => Post::latest()->filter(request(['search']))
                ->paginate(6)->withQueryString()
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

