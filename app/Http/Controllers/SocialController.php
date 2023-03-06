<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function social()
    {
        $social_data = Social::orderBy('created_at', 'DESC')->get();

        // If the user is not logged in, it redirects the user to the login page and includes an error
        if (Auth::check()) {
            $user = Auth::user();
            return view('social', ['social_data' => $social_data]);
        } else {
            return redirect('login')->withErrors('You are not allowed to access to the social page without logging in');
        }
    }

    public function social_post_get()
    {
        // If the user is not logged in, it redirects the user to the login page and includes an error
        if (Auth::check()) {
            $user = Auth::user();
            return view('social-post');
        } else {
            return redirect('login')->withErrors('You are not allowed to access to the social page without logging in');
        }
    }

    public function social_post(Request $request)
    {
        $request->validate([
            'post_title' => 'required|string|max:60',
            'post_desc' => 'required|string|max:500',

        ]);


        $social = new Social;

        // Gets the users name and id for the social page
        if (Auth::check()) {
            $user = Auth::user();
            $social->user_id = $user->id;
            $social->name = $user->name;
        }

        $social->post_title = $request->post_title;
        $social->post_desc = $request->post_desc;

        if ($request->hasFile('img_url')) {
            $file = $request->file('img_url');
            $file_name = $user->id . '.' . $file->getClientOriginalExtension();
            $path = $file->store('/img/social', 'public');
            // You can use $path variable to store the path of the image in the database

            $request->validate([
                'img_alt' => 'required|string|max:255',
                'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $social->img_url = $path;
            $social->img_alt = $request->img_alt;
        }

        $social->save();

        // If the user is not logged in, it redirects the user to the login page and includes an error
        if (Auth::check()) {
            $user = Auth::user();
            return redirect('social');
        } else {
            return redirect('login')->withErrors('You are not allowed to access to the post on social page without logging in');
        }
    }
}
