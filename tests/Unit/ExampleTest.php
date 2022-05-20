<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\TestCase;
use App\Product;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        //$this->assertTrue(true);
        Log::info('Showing the user profile for user: ');
        $product = new Product('faysal');

        $this->assertEquals('faysal', $product->nameFunct());
    }
}
