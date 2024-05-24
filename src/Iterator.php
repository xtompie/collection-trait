<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

use ArrayIterator;
use Traversable;

trait Iterator
{
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->collection);
    }
}
