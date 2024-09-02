# Collection-Trait

Traits to build collections of specific objects

## Requiments

PHP >= 8.0

## Installation

Using [composer](https://getcomposer.org/)

```shell
composer require xtompie/collection-trait
```

## Docs

```php
<?php

use Xtompie\Collection\Construct;
use Xtompie\Collection\Count;
use Xtompie\Collection\FilterAsPrivate;
use Xtompie\Collection\Iterator;

final class UserCollection implements Countable, IteratorAggregate
{
    use Construct;
    use Count;
    use FilterAsPrivate;
    use Iterator;

    public function active(): static
    {
        return $this->filter(fn(User $user) => $user->isActive());
    }
}
```

Check source: https://github.com/xtompie/collection-trait/blob/master/src/
