<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait To
{
    /**
     * @template T of object
     * @param class-string<T> $class
     * @param callable|null $map
     * @return T
     */
    public function to(string $class, ?callable $map = null): object
    {
        $result = $this->collection;
        if ($map) {
            $result = array_map($map, $result, array_keys($result));
            $result = array_filter($result);
            $result = array_values($result);
        }
        return new $class($result);
    }
}
