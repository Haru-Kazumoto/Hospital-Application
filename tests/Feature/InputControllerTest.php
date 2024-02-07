<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputControllerTest extends TestCase
{
    public function testGetHello()
    {
        $this->get('/get-hello?name=Haru')
            ->assertSeeText("Hello Haru");
    }
}
