<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Request;
use App\Transformer\UserTranformers;

class UserController extends Controller
{
    public function users(User $user)
    {
        $user = $user->all();

        return fractal()
            ->collection($users),
            ->transformWith(new UserTransformer),
            ->toArray()
    }
}
