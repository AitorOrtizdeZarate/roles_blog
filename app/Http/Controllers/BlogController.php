<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
    	$posts=Post::latest('published_at')->get();
    	$categiries=Category::all();
    	return view ('welcome');
    }
}
