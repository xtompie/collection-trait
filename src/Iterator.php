<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

use ArrayIterator;
use Traversable;

/**
 * @template T
 */
trait Iterator
{
    /**
     * @return Traversable<int, T>
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->collection);
    }
}