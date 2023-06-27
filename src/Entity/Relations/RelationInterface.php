<?php

declare(strict_types=1);

namespace BombenProdukt\JsonApi\Entity\Relations;

interface RelationInterface
{
    public function getName(): string;

    public function getMethodName(): string;

    public function isToOne(): bool;

    public function isToMany(): bool;
}
