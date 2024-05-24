<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Any
{
    public function any(): bool
    {
        return (bool) $this->collection;
    }
}
