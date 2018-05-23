<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use Session;
use Hash;
use DB;


class HomeController extends Controller
{
    public function showLogin()
    {
        return view('login.loginform');
    }

    public function doLogin(Request $request)
    {
     $validator = Validator::make($request->all(),[
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        } else{
            $user_data = [
                'email'    => $request->input('email'),
                'password' => $request->input('password'),
            ];
        }
        if (Auth::attempt($user_data)) {
            echo 'Success';
        } else {
            echo 'Failed';
        }

    }

}
