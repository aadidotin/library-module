<?php

namespace Aadi\LibraryModule\Http\Controllers;

use Illuminate\Routing\Controller;

class LibraryController extends Controller
{
    public function index()
    {
        return view('library::test');
    }
}
