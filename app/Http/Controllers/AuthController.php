<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    /*
      Ordinarily this would be where you'd register users
      although for this exmaple i'm simple creating and returning a token
      that you can use to auth the protected update routes for the rest of the test
    */
    public function createToken(Request $request) {

        //Here's some basic validation for the user model
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string'
        ]);

        //Using the validated fields above we create a new user
        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password'])
        ]);

        //From the user above we can then generate a new token
        $authToken = $user->createToken('authToken')->plainTextToken;

        return $authToken;

    }
}
