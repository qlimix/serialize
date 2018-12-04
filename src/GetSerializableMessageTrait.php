<?php declare(strict_types=1);

namespace Qlimix\Serializable;

trait GetSerializableMessageTrait
{
    /** @var SerializableInterface */
    private $message;

    /**
     * @return array
     */
    public function getMessage(): array
    {
        return [
            'name' => $this->message->getName(),
            'message' => $this->message->serialize()
        ];
    }
}
