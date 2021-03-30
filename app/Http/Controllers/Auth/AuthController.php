<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function save(Request $request)
    {
        // validate request
        $request->validate([
            'name'     => 'required',
            'mobile'   => 'required|unique:users|min:11',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
        ]);

        // save user information
        $user           = new User();
        $user->name     = $request->name;
        $user->mobile   = $request->mobile;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $save           = $user->save();

        if ($save) {
            return back()->with('success', 'Welcome! Successfully registered');
        } else {
            return back()->with('fail', 'Something went wrong, Please try again later.');
        }
    }

    public function check(Request $request)
    {
        $request->validate([
            'mobile'   => 'required|min:11',
            'password' => 'required|min:6|max:20',
        ]);

        $userInfo = User::where('mobile', '=', $request->mobile)->first();

        if (!$userInfo) {
            return back()->with('fail', "Sorry, we don't recognize your phone number.");
        } else {
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');

            } else {
                return back()->with('fail', "Sorry, Incorrect Password.");
            }
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
