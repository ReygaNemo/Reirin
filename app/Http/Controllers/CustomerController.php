<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Promo;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{
    $employee = Employee::all();
    $promo = Promo::all();
    
    return view('home', [
        "employee" => $employee,
        "title" => "appointment",
        "promo" => $promo
    ]);
}

public function showProfile()
{
    $user = Auth::user();
    
    return view('editProfile', [
        "user" => $user,
        "title" => "Profile"
    ]);
}

}
