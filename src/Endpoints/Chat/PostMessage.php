<?php

namespace Villaflor\Sebastian\Endpoints\Chat;

use stdClass;
use Villaflor\Connection\Adapter\AdapterInterface;
use Villaflor\Connection\APIInterface;
use Villaflor\Connection\ConfigurationsInterface;
use Villaflor\Connection\Traits\BodyAccessorTrait;
use Villaflor\Sebastian\Definitions\URI;

class PostMessage implements APIInterface
{
    use BodyAccessorTrait;

    private AdapterInterface $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function execute(ConfigurationsInterface $configurations): stdClass
    {
        $response = $this->adapter->post(URI::CHAT_POST_MESSAGE, $configurations->getArray());

        $this->body = json_decode($response->getBody());

        return $this->body;
    }
}
