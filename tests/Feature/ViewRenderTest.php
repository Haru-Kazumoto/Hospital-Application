<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewRenderTest extends TestCase
{
    public function testShouldReturnView()
    {
        $this->get('/first-greeting')
            ->assertSeeText("Hello Jia");
    }

    public function testShouldCreateNestedView()
    {
        $this->get('/greetings')
            ->assertSeeText('Good Night Jia The Developer');
    }
}
