<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DashboardPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all()->sortDesc();
        return view('dashboard.posts.index')->with('posts', $posts);
    }

    public function create()
    {
        $cats = Category::all();
        return view('dashboard.posts.create')->with('cats', $cats);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     =>  'required',
            'body'      =>  'required',
            'image'     =>  'required|image',
            'category'  =>  'required'
        ]);

        $image = $request->image;
        $newImage = time().$image->getClientOriginalName();
        $image->move('uploads/posts',$newImage);

        $post = Post::create([
            'user_id'       =>  Auth::id(),
            'title'         =>  $request->title,
            'body'          =>  $request->body,
            'image'         =>  'uploads/posts/' . $newImage,
            'slug'          =>  str_slug($request->title),
            'category_id'   =>  $request->category
        ]);

        return redirect(route('d.posts'))->with('success', 'Posted Successfully.');
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('dashboard.posts.show')->with('post', $post);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $cats = Category::all();
        return view('dashboard.posts.edit')->with('post', $post)->with('cats', $cats);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validate($request, [
            'title'     =>  'required',
            'body'      =>  'required',
            'category'  =>  'required'
        ]);

        if ($request->has('image')) {
            $image = $request->image;
            $newImage = time().$image->getClientOriginalName();
            $image->move('uploads/posts',$newImage);
            $post->image = 'uploads/posts/'.$newImage;
        }

        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id  = $request->category;
        $post->save();

        return redirect(route('d.posts'))->with('success', 'Updated Successfully.');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $destinationPath = public_path($post->image);
        File::delete($destinationPath);
        $post->forceDelete();
        return redirect()->back();
    }

}
