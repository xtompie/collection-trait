<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait First
{
    /**
     * @return T|null
     */
    public function first(): mixed
    {
        foreach ($this->collection as $i) {
            return $i;
        }
        return null;
    }
}