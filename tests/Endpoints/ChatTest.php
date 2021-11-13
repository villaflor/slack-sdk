<?php

namespace Villaflor\Sebastian\Tests\Endpoints;

use Villaflor\Sebastian\SebastianService;
use Villaflor\Sebastian\Tests\TestCase;

class ChatTest extends TestCase
{
    public function testChatPostMessage()
    {
        $service = new SebastianService('xoxb-716774186097-2671735011220-EsDHVngKmoOCFdsBidA6hjtO');
        $service->chatPostMessage('#test', 'Hello World!');
    }
}
