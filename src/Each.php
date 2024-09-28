<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait Each
{
    /**
     * @param callable(T, int):void $fn
     * @return static
     */
    public function each(callable $fn): static
    {
        foreach ($this->collection as $k => $v) {
            $fn($v, $k);
        }
        return $this;
    }
}