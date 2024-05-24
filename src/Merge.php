<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Merge
{
    public function merge(mixed $collection): static
    {
        return new static(array_merge($this->collection, $collection->collection));
    }
}
