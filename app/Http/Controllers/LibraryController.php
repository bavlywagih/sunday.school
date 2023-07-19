<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function library()
    {
        return view('library.library');
    }
    public function library_topics()
    {
        return view('library.library_topics');
    }
}
