<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Filter
{
    public function filter(?callable $fn = null): static
    {
        if (!$fn) {
            $fn = fn (mixed $v, int|string $k): mixed => !empty($v);
        }
        return new static(array_values(array_filter($this->collection, $fn, ARRAY_FILTER_USE_BOTH)));
    }
}
