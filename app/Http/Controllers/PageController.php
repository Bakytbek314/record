<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->get();

        return view('pages.home', compact('teachers'));
    }
}
