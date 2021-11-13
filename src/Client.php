<?php

namespace Villaflor\Sebastian;

use Villaflor\Connection\Adapter\Guzzle;
use Villaflor\Connection\Auth\AuthInterface;
use Villaflor\Sebastian\Definitions\URI;

class Client extends Guzzle
{
    public function __construct(AuthInterface $auth, string $baseURI = null)
    {
        parent::__construct($auth, $baseURI ?? URI::BASE_URI);
    }
}
