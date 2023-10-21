<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{blog,image};
use DataTables;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = blog::select('*');
            // dd($data);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
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
       $blog = blog::create([
            'title' => $request->title,
            'body' => $content
       ]);

        return redirect()->back()
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
       $blog->title = $request->title;
       $blog->body = $content;
       $blog->save();
        return redirect()->back()
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
