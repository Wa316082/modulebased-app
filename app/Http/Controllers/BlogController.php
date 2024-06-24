<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
       $blogs = Blog::all();
       return response()->json($blogs, 200);
    }
}
