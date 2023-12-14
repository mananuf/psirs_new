<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $pageTitle = 'Blog Posts';
        $blogPosts = Blog::with('media', 'user')->orderBy('created_at', 'DESC')->paginate(25);

        return view('admin.blog.index', compact('pageTitle', 'blogPosts'));
    }

    public function create()
    {
        $pageTitle = 'Create Post';

        return view('admin.blog.create', compact('pageTitle'));
    }

    public function store(BlogRequest $request)
    {
        DB::beginTransaction();

        $dom = new \DomDocument();
        $dom->loadHtml($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {

            $data = $image->getAttribute('src');

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $imgeData = base64_decode($data);

            $image_name = "/upload/" . time() . $item . '.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');

            $image->setAttribute('src', $image_name);
        }

       $blogPost = Blog::create([
            'title' => $request->title,
            'body' => $dom->saveHTML(),
            'status' => $request->status,
            // 'user_id' => Auth::id(),
       ]);

        if ($request->hasFile('post_image')) {
            $blogPost->addMediaFromRequest('post_image')->toMediaCollection('post_image', 'public');
        }

       DB::commit();

        return redirect()->route('admin.posts.index')->with('success','post created successfully.');

    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    public function edit(Blog $post)
    {
        $pageTitle = "Edit $post->title";

        return view('admin.blog.edit',compact('post', 'pageTitle'));
    }

    public function update(BlogRequest $request, Blog $post)
    {
        DB::beginTransaction();

        $dom = new \DomDocument();
        $dom->loadHtml($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {

            $data = $image->getAttribute('src');

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $imgeData = base64_decode($data);

            $image_name = "/upload/" . time() . $item . '.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');

            $image->setAttribute('src', $image_name);
        }

        $post->update([
            'title' => $request->title,
            'body' => $dom->saveHTML(),
            'status' => $request->status,
            // 'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('post_image')) {
            $post->media ? $post->clearMediaCollection('post_image') : null;
            $post->addMediaFromRequest('post_image')->toMediaCollection('post_image', 'public');
        }

        DB::commit();

        return redirect()->back()->with('success','updated successfully.');

    }

    public function destroy(Blog $post)
    {
        $post->media ? $post->clearMediaCollection('directors_image') : null;
        $post->delete();
        
        return redirect()->back();
    }
}
