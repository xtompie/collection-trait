<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait All
{
    /**
     * @return array<T>
     */
    public function all(): array
    {
        return $this->collection;
    }
}