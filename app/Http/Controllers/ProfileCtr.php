<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileCtr extends Controller
{
    function index(Request $request)
    {
        $accessToken = env('YOUR_ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN');

        $response = Http::get("https://graph.facebook.com/{$request->id}", [
            'access_token' => $accessToken,
            'fields' => 'id,name,email,profile_picture'
        ]);

        $userData = $response->json();

        dd($userData);

        // Access the user's information
        $userName = $userData['name'];
        $userEmail = $userData['email'];
        $userProfilePicture = $userData['profile_picture'];
// , compact('userData')
        return view('pages.user-profile.' . $request->id);
    }
}
