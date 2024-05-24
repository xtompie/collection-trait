<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Map
{
    public function map(?callable $callback): mixed
    {
        $result = $this->collection;
        $result = array_map($callback, $result, array_keys($result));
        return new static($result);
    }
}
