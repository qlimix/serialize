<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use Qlimix\Serialize\Exception\SerializeException;

interface SerializerInterface
{
    /**
     * @param object|array $serializable
     *
     * @throws SerializeException
     */
    public function serialize($serializable): array;
}
