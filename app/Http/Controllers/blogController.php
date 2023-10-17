<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{blog,image};

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::all();
        return view('admin.dashboard', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $blogImage);
            $input['image'] = "$blogImage";
        }

        blog::create($input);

        return redirect()->route('blogs.index')
                        ->with('success','post created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        // $blog = blog::find($id);

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog->update($request->all());
        return redirect()->route('blogs.index')
        ->with('success','updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
     $blog->destroy();
     return redirect()->back();
    }
}
