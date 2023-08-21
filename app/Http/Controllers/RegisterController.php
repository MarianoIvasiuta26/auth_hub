<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register.index');
    }

    public function create(Request $request){

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password; // TODO: Hash password
        $user->save();

        return redirect()->route('user.show');
    }

    public function show(User $user){
        return view('user.show', compact('user'));
    }

    public function edit(Request $request){

    }

    public function update(Request $request){

    }

    public function destroy(Request $request){

    }


}
