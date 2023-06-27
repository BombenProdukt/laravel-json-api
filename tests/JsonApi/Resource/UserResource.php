<?php

declare(strict_types=1);

namespace Tests\JsonApi\Resource;

use BombenProdukt\JsonApi\Resource\AbstractResource;

final class UserResource extends AbstractResource
{
    /**
     * @var string[]
     */
    public $attributes = [
        'name',
    ];

    /**
     * @var array<int|string, string>
     */
    public $relationships = [
        'posts',
    ];
}
