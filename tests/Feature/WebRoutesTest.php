<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebRoutesTest extends TestCase
{
    public function testGet()
    {
        $this->get('/hello')
            ->assertStatus(200)
            ->assertSeeText("Hello Laravel!");
    }

    public function testGetRedirect()
    {
        $this->get('/halaw')
            ->assertRedirect('/hello');
    }

    public function testFallback()
    {
        $this->get('/abc')
            ->assertSeeText("NOT FOUND");
    }
}
