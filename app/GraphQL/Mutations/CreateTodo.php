<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

final readonly class CreateTodo
{
    public function __invoke(null $_, array $args)
    {
        return auth()->user()?->todos()->create($args);
    }
}
