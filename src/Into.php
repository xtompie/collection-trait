<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Into
{
    public function into(?string $class, ?callable $map = null): mixed
    {
        $result = $this->collection;
        if ($map) {
            $result = array_map($map, $result, array_keys($result));
            $result = array_filter($result);
            $result = array_values($result);
        }
        if ($class) {
            $result = new $class($result);
        }
        return $result;
    }
}
