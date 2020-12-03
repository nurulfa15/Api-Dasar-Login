<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformer\UserTranformers;


use App\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($requst, [
            'username' => 'required|username|uniqe:users'
            'email' => 'required|email|uniqe:users'
            'phone' => 'required'
            'password' => 'required|min:6'
            'address' => 'required'
            'city' => 'required'
            'cauntry' => 'required'
            'city' => 'required'
            'name' => 'required'
            'poscode' => 'required'

        ]);

        $user->create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($requset-password),
            'api_token' => bcrypt($requset-email),
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'city' => $request->city,
            'name' => $request->name,
            'poscode' => $request->poscode,
        ]);

        return fractal()
            ->item($user)
            ->transformWith(new Transformer)
            ->addMeta([
                'token' => $user->api_token
            ])
            ->toArray();

            return response()->json($response, 201)
    }

    public function login(Request $request, User $user)
    {
        if (!Auth::attempt(['email' => $requst->email, 'password' => $request->password])){
            return response()->json([ 'error'=> 'Error', 401]);
        }

        $user = $user->find(Auth:user()->id)
        return fractal()
            ->item($user)
            ->transformWith(new UserTransform)
            ->addMeta([
                'token' => $user->api_token
            ])
            ->toArray();
    }
}
