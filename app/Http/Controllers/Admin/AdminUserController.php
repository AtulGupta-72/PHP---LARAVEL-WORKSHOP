<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function login_process(Request $request) {

        $request->validate([
            "name" => "required",
            "password" => "required"
        ]);

        if(Auth::guard('user')->attempt([
            "email" => $request->email,
            "password" => $request->password
        ])) {
            echo "all good";
        } else {
            echo "bad login";
        }

    }
}
