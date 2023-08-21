<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.index');
    }

    public function login(Request $request){
        $user = User::get()->where('email', trim($request->email))->first();

        if($user){
            if($user->password == $request->password){
                Auth::login($user);
                return redirect()->route('user.show');
            }else{
                return redirect()->route('login.index')->with('error', 'Password is incorrect');
            }
        }else{
            return redirect()->route('login.index')->with('error', 'Email is incorrect');
        }

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember')) ? true : false;

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended('user.show');
        }else{
            return redirect('login.index');
        }
    }
}
