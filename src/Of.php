<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Of
{
    public static function of(array $collection): static
    {
        return new static($collection);
    }
}
