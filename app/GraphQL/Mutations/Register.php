<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\User;

final readonly class Register
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        if (User::where('email', $args['email'])->exists()) {
            throw new \Exception('User already exists for this email');
        }

        return User::create($args);
    }
}
