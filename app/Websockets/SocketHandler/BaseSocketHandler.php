<?php

namespace App\Websockets\SocketHandler;

use Exception;
use Ratchet\ConntectionInterface;
use Ratchet\MessageComponentInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;

abstract class BaseSocketHandler implements \Ratchet\WebSocket\MessageComponentInterface
{

    function onOpen(Ratchet\ConntectionInterface $conn)
    {

    }

    function onClose(ConntectionInterface $conn)
    {

    }

    function onError(ConntectionInterface $conn, \Exception $e)
    {

    }

}