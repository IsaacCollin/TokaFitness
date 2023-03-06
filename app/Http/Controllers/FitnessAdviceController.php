<?php

namespace App\Http\Controllers;

use App\Models\Fitness_Advice;
use Illuminate\Support\Facades\Auth;

class FitnessAdviceController extends Controller
{
    // gets all the data from the table Fitness_Advice
    public function index()
    {
        $fitnessAdvice = Fitness_Advice::all();

        // If the user is not logged in, it redirects the user to the login page and includes an error
        if (Auth::check()) {
            $user = Auth::user();
            // returns it to be view in the page 
            return view('health', ['fitnessAdvice' => $fitnessAdvice]);
        } else {
            return redirect('login')->withErrors('You are not allowed to access to the life style advice without logging in');
        }
    }
}
