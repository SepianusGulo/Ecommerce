<?php

namespace App\Http\Controllers\Backend;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function index()
        {
            return view('backend.auth.login');
        }

        public function postlogin(Request $request)
        {
            if(Auth::attempt($request->only('email','password'))){
                return redirect('/dashboard');
            }
            return redirect('/signip');

        }

        public function logout()
        {
            Auth::logout();
            return redirect('/signin');
        }
}
