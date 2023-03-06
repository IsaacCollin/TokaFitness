<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        // If the user is not logged in, it redirects the user to the login page and includes an error
        if (Auth::check()) {
            $user = Auth::user();
            return view('profile', compact('user'));
        } else {
            return redirect('login')->withErrors('You are not allowed to access to the profile page without logging in');
        }
    }

    public function update(Request $request)
    {

        // validates all the data input into the 
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:14',
            'address' => 'max:255',
            'city' => 'max:255',
            'country' => 'max:255',
            'bankname' => 'max:255',
            'accountnumber' => 'max:16'
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->bank_name = $request->bankname;
        $user->account_number = $request->accountnumber;

        $user->save();

        // If the user is not logged in, it redirects the user to the login page and includes an error
        if (Auth::check()) {
            $user = Auth::user();
            return redirect('profile')->withSucess('success', 'Profile updated!');
        } else {
            return redirect('login')->withErrors('You are not allowed to access to the social page without logging in');
        }
    }
}
