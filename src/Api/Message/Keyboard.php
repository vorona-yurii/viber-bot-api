<?php

namespace Viber\Api\Message;

use Viber\Api\Message;

/**
 * Keyboard as message
 *
 * @author Vorona Yurii <voronayu1331@gmail.com>
 */
class Keyboard extends Message
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return Type::KEYBOARD;
    }
}
