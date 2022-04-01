<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $blogs = Blog::where('status', 'Accepted')->get();
        return view('index', [
            'blogs' => $blogs
        ]);
    }
}
