<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::all()->sortDesc();
        $cats2 = Category::paginate(8);
        $posts = Post::all()->sortDesc();
        return view('website.categories')->with('cats', $cats)->with('cats2', $cats2)->with('posts', $posts);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $cat = Category::where('id', $id)->first();
        $pagi = Category::paginate(8);
        $posts = Post::where('category_id', $cat->id)->get();
        return view('website.catshow')->with('cat', $cat)->with('posts', $posts)->with('pagi', $pagi);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
