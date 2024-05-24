<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait None
{
    public function none(): bool
    {
        return !(bool) $this->collection;
    }
}
