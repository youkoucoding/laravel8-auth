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
        $validate = $request->validate([
            'name'                  => 'require|max:225',
            'email'                 => 'require|email',
            'password'              => 'require|confirmed|min:6',
            'mobile'                 => 'require',
            'password_confirmation' => 'min:6',
        ]);

        $form_data = array();

        $form_data['name'] = $request->name;
        $form_data['email'] = $request->email;
        $form_data['mobile'] = $request->mobile;
        $form_data['password'] = Hash::make($request->password);

        DB::table('users')->insert($form_data);

        // login after registered
        $login_data = auth()->attempt($request->only('email', 'mobile', 'password'));

        // check login
        if (!$login_data) {
            return back()-with('Errno', 'Login are failed');
        }

        return redirect()->route('/');
    }
}
