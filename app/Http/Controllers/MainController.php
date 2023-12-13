<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $blogPosts = Blog::with('media', 'user')->latest()->limit(3)->get();

        return view('index', compact('blogPosts'));
    }
}
