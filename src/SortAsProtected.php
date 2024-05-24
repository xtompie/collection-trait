<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

use Xtompie\Sorter\Sort;
use Xtompie\Sorter\Sorter;

trait SortAsProtected
{
    /**
     * @param Sort[] $sorts
     * @return static
     */
    protected function sort(array $sorts): static
    {
        return new static(
            (new Sorter())($sorts, $this->collection)
        );
    }
}
