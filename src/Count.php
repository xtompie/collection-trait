<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Count
{
    public function count(): int
    {
        return count($this->collection);
    }
}
