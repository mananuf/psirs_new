<?php

namespace App\Http\Controllers;

use App\Models\Directorate;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function directorate(Directorate $directorate)
    {
        return view('pages.directorate', compact('directorate'));
    }
}
