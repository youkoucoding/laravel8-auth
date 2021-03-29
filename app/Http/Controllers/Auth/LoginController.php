<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        // validation
        $validate = $request->validate([
            'mobile'   => 'required',
            'password' => 'required',
        ]);

        $login_data = array();

        $login_data['mobile']   = $request->input('mobile');
        $login_data['password'] = $request->input('password');

        $login_data = auth()->attempt($request->only('mobile', 'password'));

        if (!$login_data) {
            return back()->with("Error", 'Login is failed');
        }

        return redirect()->route('/test/login');


    }
}
