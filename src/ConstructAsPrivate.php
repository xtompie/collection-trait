<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait ConstructAsPrivate
{
    /**
     * @param array<T> $collection
     */
    private function __construct(
        private array $collection
    ) {
    }
}