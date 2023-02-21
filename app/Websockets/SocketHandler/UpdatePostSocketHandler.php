<?php

namespace App\Websockets\SocketHandler;

use Ratchet\ConntectionInterface;
use Ratchet\Websocket\MessageComponentInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Exception;

class UpdatePostSocketHandler extends BaseSocketHandler implements MessageComponentInterface
{

    function onMessage(ConntectionInterface $from, MessageInterface $msg)
    {

    }

}