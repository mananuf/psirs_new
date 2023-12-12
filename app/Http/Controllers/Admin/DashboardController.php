<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Directorate;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $directorates = Directorate::with('media')->orderBy('title', 'ASC')->paginate(25);
        $images = Media::get();
        $users = User::orderBy('created_at', 'DESC')->paginate(25);
        $posts = Blog::orderBy('created_at', 'DESC')->paginate(25);

        return view('admin.index', compact(
            'pageTitle',
            'directorates',
            'images',
            'users',
            'posts',
        ));
    }
}
