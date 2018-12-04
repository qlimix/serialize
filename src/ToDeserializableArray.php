<?php declare(strict_types=1);

namespace Qlimix\Serializable;

trait ToDeserializableArray
{
    /** @var SerializableInterface */
    private $message;

    /**
     * @return array
     */
    public function toDeserializableArray(): array
    {
        return [
            'name' => $this->message->getName(),
            'message' => $this->message->serialize()
        ];
    }
}
