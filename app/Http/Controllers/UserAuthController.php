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

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        // auth()->login($user);
        $user->save();

        return redirect('/')->with("success","Welcome".$user->name);
    }

    public function login(Request $request){
        
    // method 1
        // $validator = Validator::make($request->all(),[
        //     "email"=>"required|email",
        //     "password"=>"required"
        // ]);

        // if(Auth::attempt($validator->validated())){
        //     return redirect("/")->with("success","login success");
        // }

        // return redirect()->back()->with("err","Wrong email or password");

    // method 2
        $request->validate([
            "email"=>"required|email",
            "password"=>"required"
        ]);

        $cre = $request->only('email','password');
        $attempt = Auth::attempt($cre);

        if(!$attempt){
            return redirect()->back()->with("error","Wrong email or password");;
        }

        return redirect("/")->with("success","Welcome ".Auth::user()->name);

    }

    public function logout(){
        Auth::logout();
        return redirect("/login")->with("success","logout success");
    }

    public function showLogin(){
        return view("auth.login");
    }
}
