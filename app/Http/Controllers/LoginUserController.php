<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use App\Providers\AuthServiceProvider;
use App\User;
use Auth;


class LoginUserController extends Controller
{
    protected function login(Request $request){
        

        $credentials = $request->only(['email','password']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/getTicket');
        
        }
        else{
            return back()->withErrors([
                'email'=>'Kindly check your email because the provided credentials do not match our records.',
                'password'=>'Kindly check your password because the provided credentials do not match our records.'
            ]);
        }

    }

    
    }


