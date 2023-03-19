<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Log;
use \GuzzleHttp\Client;

class UserController extends Controller
{
    /**
     * Create a dummy user with tokens for testing
     * 1|7fY2XfIxNMz9xpmS4Ya0gJn67SRPxFdQUYmExbib
     */
    public function createDummyUser() {
        try {
            $user = User::where('email', 'testemail@gmail.com')->first();
            if(!empty($user)) {
                dd("Already created test user");
            }
            $user = new User();
            $user->name = 'Test Name';
            $user->email = 'testemail@gmail.com';
            $user->password = bcrypt('test');
            // set a value in multiple of 60 for x number of requests per second
            $user->max_request_number = 60;
            $user->save();
            $tokenObj = $user->createToken('auth_token');
            $token = $tokenObj->plainTextToken;
            dd($token);
        } catch (\Exception $ex) {
            Log::debug($ex->getMessage());
        }
    }


}
