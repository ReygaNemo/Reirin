<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function generateNextCustomerID()
    {
        // Get the latest appointment ID
        $latestCustomer = Customer::latest('customer_id')->first();

        // Extract the numeric part from the ID and increment it
        $numericPart = intval(substr($latestCustomer->customer_id, 1)) + 1;

        // Format the next ID with the desired pattern (e.g., A001)
        $nextCustomerID = 'C' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        return $nextCustomerID;
    }

    public function showRegis()
    {
        return view('register', [
            "title" => "register"
        ]);
    }
    public function validName($value, &$errorMsg)
    {
        if (strlen($value) >= 3) {
            return true;
        } else {
            $errorMsg[] = 'Name must be at least 3 characters long.';
        }
    }
    public function validPassword($value, &$errorMsg)
    {
        if (preg_match('/[A-Z]/', $value) && strlen($value) > 5) {
            return true;
        } else {
            $errorMsg[] = 'Password must contain at least 1 uppercase letter and be more than 5 characters long.';
        }
    }
    public function validEmail($value, &$errorMsg)
    {

        if (strpos($value, '@gmail.com') !== false) {
            if (Customer::where('email', $value)->count() == 0) {
                return true; // Email is valid and unique
            } else {
                $errorMsg[] = 'Email is already registered.';
            }
        } else {
            $errorMsg[] = 'Email must contain "@gmail.com".';
        }
    }
    public function validPhone($value, &$errorMsg)
    {
        if (preg_match('/^\d{12}$/', $value)) {
            return true;
        } else {
            $errorMsg[] = 'Phone must contain exactly 12 digits.';
        }
    }
    public function validAddress($value, &$errorMsg)
    {
        if (stripos($value, 'jalan') !== false) {
            return true;
        } else {
            $errorMsg[] = 'Address must contain the word "jalan".';
        }
    }
    public function register(Request $request)
    {
        $errorMsg = [];
        if (
            $this->validEmail($request->input('email'), $errorMsg) &&
            $this->validPassword($request->input('password'), $errorMsg) &&
            $this->validName($request->input('customer_name'), $errorMsg) &&
            $this->validPhone($request->input('customer_phone'), $errorMsg) &&
            $this->validAddress($request->input('customer_address'), $errorMsg)
        ){
            $customerData = [
                'customer_id' => $this->generateNextCustomerID(),
                'customer_name' => $request->input('customer_name'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                'customer_phone' => $request->input('customer_phone'),
                'customer_role' => 1,
                'customer_address' => $request->input('customer_address'),
                'customer_img' => 'path to kucing',
            ];

            // Using the create method
            $customer = Customer::create($customerData);
            return view('login');
        } else {
            return view('register', [
                "errors" => $errorMsg,
                "title" => "register"
            ]);
        }
    }
}
