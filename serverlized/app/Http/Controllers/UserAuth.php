<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Support\Str;
use Auth;

use Illuminate\Http\Request;
use Hash;

class UserAuth extends Controller
{
    //

    function login(Request $request){
        
        $params = [];
        $status = 200;

        if($request->isMethod('post')){

        $val = $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ]);
        
        $c = Auth::guard('customer')->attempt(
            ['email'=> $request->email, 
            'password'=> $request->password
            ]
        );

        if($c){

            return redirect('dashboard');
        
        }else{
            return redirect()->back();
        }

    }


    return view('user.login');

    }

    function register(Request $request){
        
        if($request->isMethod('post')){

            $input = $this->validate($request, [
                "email" => "required|email",
                "name"=> "required",
                "password"=> "required"
            ]);

            $random = Str::random(50);

            $new = new Customer();

            $new -> email = $input['email'];
            $new ->name = $input['name'];
            $new ->password = Hash::make($input['password']);
            $new->email_hash = $random;

            $new->save();

            

        }

        return view('user.register');
    }
}
