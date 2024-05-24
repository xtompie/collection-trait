<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait OfOptional
{
    public static function ofOptional(array $collection): static
    {
        return new static(\array_filter($collection));
    }
}
