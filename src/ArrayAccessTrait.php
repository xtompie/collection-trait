<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait ArrayAccessTrait
{
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->collection[] = $value;
        } else {
            $this->collection[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->collection[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->collection[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return isset($this->collection[$offset]) ? $this->collection[$offset] : null;
    }
}
