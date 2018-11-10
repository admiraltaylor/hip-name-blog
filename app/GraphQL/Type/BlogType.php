<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class BlogType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Blog',
        'description' => 'A single blog post'
    ];

    public function fields ()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description'=> 'The id of a blog post'
            ],
            'title' => [
                Type::string(),
                'description' => 'The title of a blog posst'
            ],
            'body' => [
                Type::string(),
                'description' => 'The body of a blog post'
            ]
        ];
    }
}