<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all()->sortDesc();
        return view('dashboard.users.user')->with('users', $users);
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          =>  'required',
            'email'         =>  'required',
            'password'      =>  'required',
            'password_confirmation'  =>  'required'
        ]);
        $user = User::create([
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'password'      =>  Hash::make($request->password)
        ]);

        return redirect(route('d.users'))->with('success', 'Posted Successfully.');
    }

    public function show($id)
    {
        //
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
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function approve($id)
    {
        $user = User::find($id);
        $user->update(['role' => 'admin']);
        return redirect()->back();
    }
}
