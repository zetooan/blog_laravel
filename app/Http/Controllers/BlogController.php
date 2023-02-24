<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'hal' => 'Blog',
            'title' => 'All Post',
            'posts' => Post::with('author', 'category')->latest()->filter(request(['search', 'category', 'author']))->paginate(20)->withQueryString()
        ]);
    }
    public function show(post $slug)
    {
        return view('post', [
            'hal' => 'Blog',
            'post' => $slug->load('author', 'category')
        ]);
    }
    public function categories()
    {
        return view('categories', [
            'hal' => 'Categories',
            'categories' => Category::latest()->get()
        ]);
    }
    public function author()
    {
        return view('author', [
            'hal' => 'Author',
            'authors' => User::latest()->paginate(20)->withQueryString()
        ]);
    }
}
