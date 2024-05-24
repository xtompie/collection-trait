<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait ConstructAsPrivate
{
    private function __construct(
        private array $collection
    ) {
    }
}
