<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Reduce
{
    public function reduce(callable $fn, mixed $initial): mixed
    {
        return array_reduce($this->collection, $fn, $initial);
    }
}
