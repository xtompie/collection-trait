<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait To
{
    /**
     * @template Y of object
     * @param class-string<Y> $class
     * @param callable(T, int):mixed|null $map
     * @return Y
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
