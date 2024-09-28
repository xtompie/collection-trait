<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait OfOptional
{
    /**
     * @param array<T|null> $collection
     * @return static
     */
    public static function ofOptional(array $collection): static
    {
        return new static(\array_filter($collection));
    }
}