<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        category::create($request->all());
        return redirect()->route('category.index')
        ->with('success','category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return view('admin.blog.category.show',compat('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('admin.blog.category.show','category');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();

        $category->create($input);

        return redirect()->route('category.index')
                        ->with('success','post created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
            $category->destroy();
            return redirect()->back();
    }
}
