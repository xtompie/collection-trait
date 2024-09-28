<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait Of
{
    /**
     * @param array<T> $collection
     * @return static
     */
    public static function of(array $collection): static
    {
        return new static($collection);
    }
}