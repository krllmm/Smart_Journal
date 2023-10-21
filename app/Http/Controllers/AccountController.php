<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.login');
    }

    public function create(Request $request)
    {
        $data = request()->validate([
            'login' => 'string',
            'password' => 'string',
        ]);

        User::create($data);
        return redirect()->route('main');
    }

    public function register()
    {
        return view('account.register');
    }

    public function sign_in(Request $request)
    {
        $data = request()->validate([
            'login' => 'string',
            'password' => 'string',
        ]);

        $remember = ( !empty( $request->remember_me ) )? TRUE : FALSE;

        if (Auth::attempt([
            'login' => $request->get('login'),
            'password' => $request->get('password'),
        ], $remember)){
            return redirect()->route('article.index');
        }

        return redirect()->route('main');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
