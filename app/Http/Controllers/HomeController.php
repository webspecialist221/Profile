<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit-profile',compact('user'));
    }


    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed']
            ]);
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('message','Password Updated');
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->skills = $request->skills;
        $user->save();
        return redirect()->back()->with('message','Profile Updated');

    }
}
