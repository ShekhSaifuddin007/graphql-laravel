<?php

namespace App\GraphQL\Queries;

use App\Models\Book;

class Complex
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Book::query()->where('author', 'like', "%{$args['search']}%")->get();
    }
}
