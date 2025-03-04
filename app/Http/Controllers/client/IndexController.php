<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $products = Product::orderBy('created_at', 'desc')->take(4)->get(); 
        return view('client.index', compact('products','blogs'));
    }
}
