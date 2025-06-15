<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function showRegister(){
        return view("auth.register");
    }

    public function register(Request $request){
        // validation
        $request->validate([
            "name"=>"required|string",
            "email"=>"required|email|unique:users,email",
            "password"=>"required"
        ]);

        // check email already exits
        // check password
        // store to database

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);
        $user->save();

        return redirect()->back()->with("success","Account created successfully");
        // login
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            "email"=>"required|email",
            "password"=>"required"
        ]);

        // $user = User::where("email", $request->email)->first();
        // if($user){
        //     if(Auth::attempt($validator->validated())){
        //         return redirect("/");
        //     }
        // }

        if(Auth::attempt($validator->validated())){
            return redirect("/")->with("success","Successfully login");
        }

        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect("/")->with("success","Successfully logout");
    }

    public function showLogin(){
        return view("auth.login");
    }
}
