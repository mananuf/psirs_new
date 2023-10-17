<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class manageImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = image::all();
        return view('admin.images.image',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id'=> 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $psirs_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $psirs_image);
            $input['image'] = "$psirs_image";
        }

        image::create($input);

        return redirect()->route('images.index')
                        ->with('success','image created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(image $image)
    {
        return view('admin.blog.images.show',compat('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(image $image)
    {
        return view('admin.blog.images.show',compat('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, image $image)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id'=> 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $images = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $images);
            $input['image'] = "$images";
        }else{
            unset($input['image']);
        }

        $image->update($input);

        return redirect()->route('images.index')
                        ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(image $image)
    {
        $image->delete();
        return redirect()->back();
    }
}
