<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all()->sortDesc();
        $pagi = Post::paginate(6);
        return view('website.posts')->with('posts', $posts)->with('pagi', $pagi);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $user = User::where('id', $post->user_id)->first();
        $cat = Category::where('id', $post->category_id)->first();
        return view('website.postshow')->with('post', $post)->with('user', $user)->with('cat', $cat);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
