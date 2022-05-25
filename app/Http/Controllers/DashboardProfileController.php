<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();
        if ($user->profile == null) {
            $profile = Profile::create([
                'gender'    =>  'Male',
                'city'      =>  'Menouf',
                'bio'       =>  'Hello World',
                'facebook'  =>  'https://www.facebook.com/',
                'role'      =>  $user->role,
                'user_id'   =>  $id
            ]);
        }

        return view('dashboard.users.profile')->with('user', $user);
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
        //
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required',
            'city'      =>  'required',
            'gender'    =>  'required',
            'bio'       =>  'required',
            'facebook'  =>  'required'
        ]);

        $user = Auth::user();
        $user->name                 = $request->name;
        $user->profile->city        = $request->city;
        $user->profile->gender      = $request->gender;
        $user->profile->bio         = $request->bio;
        $user->profile->facebook    = $request->facebook;
        $user->save();
        $user->profile->save();

        if ($request->has('password')) {
            if ($request->password === $request->c_password) {
                $request->password->validate();
                $user->password = bycrpt($request->password);
                $user->save();
            } else {
                return "Password Doesn't Math";
            }
        }

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        //
    }
}
