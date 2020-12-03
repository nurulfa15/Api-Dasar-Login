<?php
namespace App\Transformers;
use App\User;
use Langue\Fractal\TransformerAbstrac;

class UserTransformer extends TransformerAbstrac
{
    public function transormer(User $user)
    {
        return[
            'name' => $user->name,
            'email' => $user->email,
            'registered' => $user->created_at->diffForHumans(),
            'token' => $user->api_token

        ];
    }
}



?>