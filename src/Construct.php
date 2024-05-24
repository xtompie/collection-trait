<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Construct
{
    public function __construct(
        protected array $collection
    ) {
    }
}
