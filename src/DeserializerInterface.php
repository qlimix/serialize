<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use Qlimix\Serialize\Exception\SerializeException;

interface DeserializerInterface
{
    /**
     * @param mixed[] $data
     *
     * @throws SerializeException
     */
    public function deserialize(array $data): object;
}
