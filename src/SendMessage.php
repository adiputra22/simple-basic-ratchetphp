<?php
$userId = 51;

$entryData = array(
    'user_id' => $userId,
    'message' => "Hola hey"
);

$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'adiputra');
$socket->connect("tcp://localhost:5555");
$socket->send(json_encode($entryData));