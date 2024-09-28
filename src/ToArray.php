<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait ToArray
{
    /**
     * @param callable(T, int):mixed|null $map
     * @return array<T>
     */
    public function toArray(?callable $map = null): array
    {
        $result = $this->collection;
        if ($map) {
            $result = array_map($map, $result, array_keys($result));
            $result = array_filter($result);
            $result = array_values($result);
        }
        return $result;
    }
}