<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = \App\User::all();
        return view('backend.user.index', ['user' => $user]);
    }
}
