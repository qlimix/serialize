<?php declare(strict_types=1);

namespace Qlimix\Serialize;

use Qlimix\Serialize\Exception\SerializeException;

interface DeserializerInterface
{
    /**
     * @return mixed
     *
     * @throws SerializeException
     */
    public function deserialize(array $data);
}
