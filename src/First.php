<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait First
{
    public function first(): mixed
    {
        foreach ($this->collection as $i) {
            return $i;
        }
        return null;
    }
}
