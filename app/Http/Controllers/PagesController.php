<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Directorate;

class PagesController extends Controller
{
    public function directorate(Directorate $directorate)
    {
        return view('pages.directorate', compact('directorate'));
    }

    public function posts()
    {
        $posts = Blog::with('media', 'user')->latest()->paginate(10);

        return view('pages.blog.index', compact('posts'));
    }

    public function showPost(Blog $post)
    {
        return view('pages.blog.show', compact('post'));
    }
}
