<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class blogController extends Controller
{
    public function index(){
		$blogs = Blog::all();
    	return view('home', ['blogs' => $blogs]);
    }
}
