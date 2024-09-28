<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait SortAsProtected
{
    /**
     * @param array<\Xtompie\Sorter\Sort> $sorts
     * @return static
     */
    protected function sort(array $sorts): static
    {
        if (!class_exists(\Xtompie\Sorter\Sorter::class)) {
            throw new \Exception('Package xtompie/sorter is missing. Run "composer install xtompie/sorter" to use this feature.');
        }

        $sorter = new \Xtompie\Sorter\Sorter();
        return new static(
            $sorter($sorts, $this->collection)
        );
    }
}
