<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class FileUploaderTest extends TestCase
{
    public function testUploadFile()
    {
        $picture = UploadedFile::fake()->image("pict.png");

        $this->post('/file/upload', [
            'picture' => $picture
        ])->assertSeeText("OK : pict.png");
    }
}
