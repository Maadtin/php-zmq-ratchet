<?php

// post.php ???
// This all was here before  ;)
$entryData = [
    'category' => 'testTopic'
];

// This is our new stuff
try {
    $context = new ZMQContext();
    $socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
    $socket->connect("tcp://127.0.0.1:5555");
    $socket->send(json_encode($entryData));
} catch (ZMQSocketException $e) {
    echo json_encode([
        'error' => $e->getMessage()
    ]);
}

