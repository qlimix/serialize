<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use Qlimix\Serialize\Exception\DeserializeException;

interface SerializerInterface
{
    /**
     * @param SerializableInterface $serializable
     *
     * @return array
     *
     * @throws DeserializeException
     */
    public function serialize(SerializableInterface $serializable): array;
}
