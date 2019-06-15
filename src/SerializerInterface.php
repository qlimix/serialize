<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use Qlimix\Serialize\Exception\SerializeException;

interface SerializerInterface
{
    /**
     * @return mixed[]
     *
     * @throws SerializeException
     */
    public function serialize(object $serializable): array;
}
