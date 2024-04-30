<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    public function index(){
        return view("user/home_logined");
    }

    public function HomePage(){
        return view("user/homepage");
    }

    public function login(Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/home_logined');
        }
        return redirect('/homepage');
        // Lakukan validasi dan proses login di sini
    }
}