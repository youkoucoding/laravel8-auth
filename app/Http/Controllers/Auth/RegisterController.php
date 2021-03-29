<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    // auth view
    public function index()
    {
        return view('auth.register');
    }

    /**
     * 保存一个新用户。
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //TODO what is this's return value?
        $validate = $request->validate([
            'name'                  => 'required|max:225',
            'email'                 => 'required|email',
            'password'              => 'required|confirmed|min:6|string',
            'mobile'                 => 'required',
            'password_confirmation' => 'min:',
        ]);

        $form_data = array();
        //input
        $form_data['name'] = $request->input('name');
        $form_data['email'] = $request->input(email);
        $form_data['mobile'] = $request->input('mobile');
        $form_data['password'] = Hash::make($request->input('password'));

        DB::table('users')->insert($form_data);

        // login after registered
        $login_data = auth()->attempt($request->only('email', 'mobile', 'password'));

        // check login
        if (!$login_data) {
            return back()-with('Error', 'Login are failed');
        }

        return redirect()->route('/test/register');
    }
}
