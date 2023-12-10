<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directorate;

class DirectorateController extends Controller
{
    public function index()
    {
        $directorates = Directorate::orderBy('title', 'ASC')->paginate(25);
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
        dd($request->all());
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
       $directorate = Directorate::create([
            'title' => $request->title,
            'body' => $content
       ]);


        return redirect()->back()
                        ->with('success','post created successfully.');
    }

    public function show(Directorate $directorate)
    {
        return view('admin.directorate.show',compact('directorate'));
    }

    public function edit(Directorate $directorate)
    {
        return view('admin.directorate.edit',compact('directorate'));
    }

    public function update(Request $request, Directorate $directorate)
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
        return redirect()->to('blog')
        ->with('success','updated successfully.');


    }

    public function destroy(Directorate $directorate)
    {
        $directorate->delete();
        return redirect()->back()->with('success','directorate deleted successfully');
    }
}

