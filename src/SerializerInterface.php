<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use Qlimix\Serialize\Exception\DeserializeException;

interface SerializerInterface
{
    /**
     * @param object|array $serializable
     *
     * @throws DeserializeException
     */
    public function serialize($serializable): array;
}
