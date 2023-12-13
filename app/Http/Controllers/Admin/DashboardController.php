<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Directorate;
use App\Models\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $queryDirectorates = Directorate::with('media')->orderBy('title', 'ASC');
        $queryUsers = User::orderBy('created_at', 'DESC');
        $queryPosts = Blog::orderBy('created_at', 'DESC');
        $directorates = $queryDirectorates->latest('created_at')->limit(6)->get();
        $images = Media::latest()->limit(12)->get();
        $users = $queryUsers->latest('created_at')->limit(6)->get();
        $posts = $queryPosts->latest('created_at')->limit(6)->get();
        $directoratesCount = $queryDirectorates->count();
        $imagesCount = Media::count();
        $postsCount = $queryPosts->count();
        $usersCount = $queryUsers->count();
        
        return view('admin.index', compact(
            'pageTitle',
            'directorates',
            'images',
            'users',
            'posts',
            'imagesCount',
            'usersCount',
            'postsCount',
            'directoratesCount'
        ));
    }
}
