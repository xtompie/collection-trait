<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Slice
{
    public function slice(int $offset, ?int $length = null): static
    {
        return new static(
            array_slice($this->collection, $offset, $length)
        );
    }
}
