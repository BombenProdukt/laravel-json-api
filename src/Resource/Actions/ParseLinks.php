<?php

declare(strict_types=1);

namespace BombenProdukt\JsonApi\Resource\Actions;

use BombenProdukt\JsonApi\Resource\Model\Link;
use Illuminate\Support\Collection;

final class ParseLinks
{
    public static function execute(array $links): array
    {
        return Collection::make($links)
            ->mapWithKeys(fn (Link $link): array => [$link->key => $link])
            ->all();
    }
}
