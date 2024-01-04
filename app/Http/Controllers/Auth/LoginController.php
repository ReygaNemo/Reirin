<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function password_verfiy($data, $input){
    //     if($data == $input){
    //         return true;
    //     }else{
    //         false;
    //     }
    // }
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $customer = Customer::where('email', $credentials['email'])->first();

        //$errors = ["Invalid Credentials"];
        if ($customer && ($credentials['password'] == $customer->password)) {
            Auth::login($customer);
            if($customer->customer_role == 1) return redirect()->route('showHome');
            else return redirect('/admin');
        } else {
            return view('login')->with('errors', $credentials);
        }

        // if (Auth::attempt($credentials)) {
        //     // Authentication passed
        //     return redirect()->intended('/dashboard');
        // }
        //return redirect()->route('login')->with('error', 'Invalid login credentials');
    }

    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');
    }
}
