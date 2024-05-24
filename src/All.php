<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait All
{
    public function all(): array
    {
        return $this->collection;
    }
}
