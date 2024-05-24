<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait ToArray
{
    public function toArray(): array
    {
        return $this->collection;
    }
}
