<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait Reduce
{
    /**
     * @template R
     * @param callable(R, T):R $fn
     * @param R $initial
     * @return R
     */
    public function reduce(callable $fn, mixed $initial): mixed
    {
        return array_reduce($this->collection, $fn, $initial);
    }
}