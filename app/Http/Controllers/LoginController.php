<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showForm() {
        return view("login");
    }

    public function submitForm(LoginFormRequest $request) {

        $validated = $request->validated();
        $credentials = [
            "email"=> $validated["email"],
            "password"=> $validated["password"]
        ];
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route("notes");
        }
    }
}
