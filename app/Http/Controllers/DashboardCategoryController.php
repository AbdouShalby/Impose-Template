<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cats = Category::all()->sortDesc();
        return view('dashboard.categories.index')->with('cats', $cats);
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         =>  'required',
            'description'   =>  'required',
        ]);

        $cat = Category::create([
            'title'         =>  $request->title,
            'description'   =>  $request->description
        ]);

        return redirect(route('d.categories'))->with('success', 'Posted Successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('dashboard.categories.edit')->with('cat', $cat);
    }

    public function update(Request $request, $id)
    {
        $cat = Category::find($id)->first();
        $this->validate($request, [
            'title'     =>  'required',
            'description'  =>  'required',
        ]);

        $cat->title = $request->title;
        $cat->description  = $request->description;
        $cat->save();

        return redirect(route('d.categories'))->with('success', 'Updated Successfully.');
    }

    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->forceDelete();
        return redirect()->back();
    }
}
