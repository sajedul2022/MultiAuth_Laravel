<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

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

    // profile Manage

    public function profileUpdateShow()
    {
        return view('profile.profile-manage');
    }

    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'required|min:4|string|max:255',
            // 'email'=>'required|email|string|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        // $user->email = $request['email'];
        $user->save();
        return back()->with('message', 'Profile Updated');
    }

    // password change

    public function passwordChangeindex()
    {
        return view('profile.password-change');
    }

    public function passwordChangeStore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        // dd('Password change successfully.');
        return back()->with('message', 'Password change successfully.');
    }
}
