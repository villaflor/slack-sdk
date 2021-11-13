<?php

namespace Villaflor\Sebastian;

use Villaflor\Connection\Auth\APIToken;
use Villaflor\Sebastian\Definitions\URI;
use Villaflor\Sebastian\Endpoints\Chat;

class SebastianService
{
    private $client;

    public function __construct(string $userOAuthToken)
    {
        $auth = new APIToken($userOAuthToken);
        $this->client = new Client($auth);
    }

    public function chatPostMessage(string $channel, string $message)
    {
        return (new Chat($this->client))->postMessage($channel, $message);
    }
}
