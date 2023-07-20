<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $path = public_path("\\tmp\\1\\snip.JPG");
        print_r($path)
;        $this->assertTrue(File::exists($path));
    }
}
