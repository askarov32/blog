<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostViewController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 5); 
        $posts = Post::where('is_published', true)
            ->with('category')
            ->paginate($perPage);

        return view('posts', compact('posts', 'perPage'));
    }
}