<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;

final readonly class Login
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        if (Auth::attempt($args)) {
            /** @var \App\Models\User $user */
            $user = auth()->user();

            /** @var \Laravel\Sanctum\PersonalAccessToken $token */
            $token = $user->createToken('api');

            return [
                'user' => $user,
                'token' => $token->plainTextToken,
            ];
        }
    }
}
