<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloControllerTest extends TestCase
{
    public function testGetHello()
    {
        $this->get('/hello-world')
            ->assertSeeText("Hello World");
    }
}
