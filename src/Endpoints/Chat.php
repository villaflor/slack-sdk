<?php

namespace Villaflor\Sebastian\Endpoints;

use stdClass;
use Villaflor\Connection\Adapter\AdapterInterface;
use Villaflor\Connection\APIInterface;
use Villaflor\Connection\Traits\BodyAccessorTrait;
use Villaflor\Sebastian\Definitions\URI;

class Chat implements APIInterface
{
    use BodyAccessorTrait;

    private AdapterInterface $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function postMessage(string $channel, string $message): stdClass
    {
        $payload = [
            'channel' => $channel,
            'text' => $message
        ];

        $response = $this->adapter->post(URI::CHAT_POST_MESSAGE, $payload);

        $this->body = json_decode($response->getBody());

        return $this->body;
    }
}
