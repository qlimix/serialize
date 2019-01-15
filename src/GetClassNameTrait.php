<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use function get_class;

trait GetClassNameTrait
{
    public function getName(): string
    {
        return get_class($this);
    }
}
