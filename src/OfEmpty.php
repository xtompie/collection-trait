<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait OfEmpty
{
    public static function ofEmpty(): static
    {
        return new static([]);
    }
}
