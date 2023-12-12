<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directorate;
use Illuminate\Support\Facades\DB;

class DirectorateController extends Controller
{
    public function index()
    {
        $directorates = Directorate::with('media')->orderBy('title', 'ASC')->paginate(25);
        $pageTitle = 'Directorates';

        return view('admin.directorate.index',compact('directorates', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create Directorate';

        return view('admin.directorate.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:directorates',
            'body' => 'required',
            'directors_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'directorate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        DB::beginTransaction();
        
       $dom = new \DomDocument();

       $dom->loadHtml($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $imageFile = $dom->getElementsByTagName('img');

       foreach($imageFile as $item => $image){

           $data = $image->getAttribute('src');

           list($type, $data) = explode(';', $data);

           list(, $data)      = explode(',', $data);

           $imgeData = base64_decode($data);

           $image_name= "/upload/" . time().$item.'.png';

           $path = public_path() . $image_name;

           file_put_contents($path, $imgeData);

           $image->removeAttribute('src');

           $image->setAttribute('src', $image_name);

        }

       $directorate = Directorate::create([
            'title' => $request->title,
            'body' => $dom->saveHTML(),
            'directors_name' => $request->directors_name ? $request->directors_name : null,
       ]);

        if ($request->hasFile('directors_image')) {
            $directorate->addMediaFromRequest('directors_image')->toMediaCollection('directors_image', 'public');
        }

        if ($request->hasFile('directorate_image')) {
            $directorate->addMediaFromRequest('directorate_image')->toMediaCollection('directorate_image', 'public');
        }

        DB::commit();

        return redirect()->route('admin.directorates.index')->with('success','post created successfully.');
    }

    public function edit(Directorate $directorate)
    {
        $pageTitle = "Edit $directorate->title";
        return view('admin.directorate.edit',compact('directorate', 'pageTitle'));
    }

    public function update(Request $request, Directorate $directorate)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required',
            'directors_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'directorate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

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
        
        $directorate->update([
            'title' => $request->title,
            'body' => $dom->saveHTML(),
            'directors_name' => $request->directors_name ? $request->directors_name : $directorate->directors_name,
        ]);

        if ($request->hasFile('directors_image')) {
            $directorate->media ? $directorate->clearMediaCollection('directors_image'): null;
            $directorate->addMediaFromRequest('directors_image')->toMediaCollection('directors_image', 'public');
        }

        if ($request->hasFile('directorate_image')) {
            $directorate->media ? $directorate->clearMediaCollection('directorate_image') : null;
            $directorate->addMediaFromRequest('directorate_image')->toMediaCollection('directorate_image', 'public');
        }

        DB::commit();
        
        return redirect()->back()->with('success', 'updated successfully');
    }

    public function destroy(Directorate $directorate)
    {
        $directorate->delete();
        return redirect()->back()->with('success','directorate deleted successfully');
    }
}

