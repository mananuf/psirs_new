<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorate;
use DataTables;

class directorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directorates = directorate::all();
        return view('admin.directorate.index',compact('directorates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.directorate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
       $content = $request->body;

       $dom = new \DomDocument();

       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

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



       $content = $dom->saveHTML();
       $directorate = directorate::create([
            'title' => $request->title,
            'body' => $content
       ]);


        return redirect()->back()
                        ->with('success','post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(directorate $directorate)
    {
        return view('admin.directorate.show',compact('directorate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(directorate $directorate)
    {
        return view('admin.directorate.edit',compact('directorate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, directorate $directorate)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
       $content = $request->body;

       $dom = new \DomDocument();

       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $imageFile = $dom->getElementsByTagName('img');



       foreach($imageFile as $item => $image){

           $data = $image->getAttribute('src');
           if (strpos($data, ';') === false) {
               continue;
           }

           list($type, $data) = explode(';', $data);

           list(, $data)      = explode(',', $data);

           $imgeData = base64_decode($data);

           $image_name= "/upload/" . time().$item.'.png';

           $path = public_path() . $image_name;

           file_put_contents($path, $imgeData);



           $image->removeAttribute('src');

           $image->setAttribute('src', $image_name);

        }



       $content = $dom->saveHTML();
       $directorate->title = $request->title;
       $directorate->body = $content;
       $directorate->save();
        return redirect()->back()
        ->with('success','updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(directorate $directorate)
    {
        $directorate->destroy();
        return redirect()->back();
    }
}
