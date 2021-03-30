<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
        $name     = $request->input('name');
        $mobile   = $request->input('mobile');
        $email    = $request->input('email');
        $password = $request->input('password');

        if (empty($name) || empty($password) || empty($mobile) || empty($email)) {
            return false;
        }

        $user                    = new User();
        $user->name              = $name;
        $user->mobile            = $mobile;
        $user->email             = $email;
        $user->password          = Hash::make($password);
        $user->email_verified_at = Carbon::now()->toDateString();
        $user->created_at        = Carbon::now()->toDateString();
        $user->updated_at        = Carbon::now()->toDateString();
        $user->save();

        return true;
    }
}
