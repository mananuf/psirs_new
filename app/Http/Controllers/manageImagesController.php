<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{image,category};
use Illuminate\Support\Facades\Storage;

class manageImagesController extends Controller
{
    public function index()
    {
        $images = image::all();
        return view('admin.images.image',compact('images'));
    }

    public function create()
    {
        $categories = category::all();
        return view('admin.images.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048|mimes:jpg,jpeg,png',
            'category_id'=> 'required'
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
           $filePath = Storage::disk('public')->put('images', request()->file('image'));

            $input['image'] = $filePath;
        }

        image::create($input);

        return redirect()
                ->back()
                ->with('success','image created successfully.');

    }

    public function show(image $image)
    {
        return view('admin.images.edit',compact('image'));
    }

    public function edit(image $imagess)
    {
        $categories = category::all();

        return view('admin.images.edit',compact('imagess','categories'));
    }

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

        $imagess->save($input);

        return redirect()
                ->route('imagess.index')
                ->with('success',' updated successfully');
    }

    public function destroy(image $imagess)
    {
        Storage::disk('public')->delete($imagess->image);
        $imagess->delete();
        return redirect()->back();
    }
}
