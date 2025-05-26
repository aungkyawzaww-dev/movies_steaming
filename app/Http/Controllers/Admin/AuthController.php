<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view("admin.auth.login");
    }

    public function login(Request $request){

        $cre = $request->only("email","password");
        $checkAuth = auth()->guard("admin")->attempt($cre);
        if(!$checkAuth) {
            return "wrong email or password";
        }
        // return auth()->guard("admin")->user();
        return redirect("/admin/dashboard");
    }

    public function logout(){
        auth()->guard("admin")->logout();
        return redirect("/");
    }
}
