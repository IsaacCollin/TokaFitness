<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    // This directs the user to the sign in page
    public function index()
    {
        return view('login');
    }

    // Allowing the user to sign in to the application with their email and password.
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        // error message return
        return redirect("login")->withErrors('Login details are not valid');
    }


    // This directs the user to the sign up page
    public function registration()
    {
        return view('registration');
    }

    // Allowing the user to create a new account with their name, email, and password.
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        //success message
        return redirect("login")->withSuccess('signed-in');
    }

    // Allowing a new user to be added to the database with their name, email, and password.
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    // when login successful sends the user to the dashbroad 
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        // error message return
        return redirect("login")->withErrors('You are not allowed to access to the dashboard without logging in');
    }

    // this signs the user out 
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
