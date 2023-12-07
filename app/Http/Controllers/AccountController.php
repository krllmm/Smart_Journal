<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.login');
    }

    public function create(Request $request)
    {
        $data = request()->validate([
            'name' => 'string',
            'surname' => 'string',
            'login' => 'string',
            'password' => 'string',
        ]);
        $data['role_id'] = 2;

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

        $user = User::where('login', $data['login'])->first();

        if($user == null){
            redirect()->back()->with('login', 'no user found');
        }
        if($user->password != Hash::make($data['password'])){
            redirect()->back()->with('password', 'wrong password')->withInput();
        }

        if (Auth::attempt([
            'login' => $request->get('login'),
            'password' => $request->get('password'),
        ], $remember)){
            return redirect()->route('main');
        }
        else{
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
