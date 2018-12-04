<?php declare(strict_types=1);

namespace Qlimix\Serializable;

trait GetClassNameTrait
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return \get_class($this);
    }
}
