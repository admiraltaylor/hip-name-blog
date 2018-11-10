<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use app\Blog;

class BlogsQuery extends Query
{
    protected $attributes = [
        'name' => 'blogs'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Blog'));
    }

    public function resolve($root, $args)
    {
        return Blog::all();
    }
}