<?php

declare(strict_types=1);

namespace Xtompie\CollectionTrait;

trait Each
{
    public function each(callable $fn): static
    {
        foreach ($this->collection as $k => $v) {
            $fn($v, $k);
        }
        return $this;
    }
}
