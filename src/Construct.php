<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

/**
 * @template T
 */
trait Construct
{
    /**
     * @param array<T> $collection
     */
    public function __construct(
        protected array $collection
    ) {
    }
}