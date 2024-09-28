<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait Filter
{
    /**
     * @param callable(T, int):bool|null $fn
     * @return static
     */
    public function filter(?callable $fn = null): static
    {
        if (!$fn) {
            $fn = fn (mixed $v, int $k): bool => !empty($v);
        }
        return new static(array_values(array_filter($this->collection, $fn, ARRAY_FILTER_USE_BOTH)));
    }
}