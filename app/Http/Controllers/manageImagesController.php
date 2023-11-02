<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{image,category};
use Illuminate\Support\Facades\Storage;

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
        $categories = category::all();
        return view('admin.images.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048|mimes:jpg,jpeg,png',
            'category_id'=> 'required'
        ]);

        $input = $request->all();
        // dd($input);

        if ($request->hasFile('image')) {
            // put image in the public storage
           $filePath = Storage::disk('public')->put('images', request()->file('image'));

            $input['image'] = $filePath;
        }

        image::create($input);

        return redirect()->back()
                        ->with('success','image created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(image $image)
    {
        return view('admin.images.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(image $imagess)
    {
        // dd($image);
        $categories = category::all();
        return view('admin.images.edit',compact('imagess','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, image $imagess)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id'=> 'required'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            // put image in the public storage
            Storage::disk('public')->delete($imagess->image);
            $filePath = Storage::disk('public')->put('images', request()->file('image'));

            $input['image'] = $filePath;
        }
        // dd($filePath);


        $imagess->save($input);

        return redirect()->route('imagess.index')
                        ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(image $imagess)
    {
        // dd($image);
        Storage::disk('public')->delete($imagess->image);
        $imagess->delete();
        return redirect()->back();
    }
}
