<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterUserController extends Controller
{ 

    
    
    public function create(Request $request){
        $formData = $request->all();
        $rules = [
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>['required', 'string', 'min:8'],
            'address'=>['required', 'string', 'max:255'],
            'nationa'=>['required', 'string', 'max:255'],
            'phoneNumber'=>['required', 'numeric']

        ];

        $validator = Validator::make($formData,$rules);
        if($validator){
             $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'address'=>$request->address,
                'national'=>$request->national,
                'phone_number'=>$request->phoneNumber

            ]);
            $this->event(new Registered($user));
            
        return redirect()->intended('/user');
        }
        else{
            return back();

        }

    }

    
}
