<?php

namespace Tests\Unit;

use App\ProductRepository;
use Mockery;
use PHPUnit\Framework\TestCase;

class MockProductsTest extends TestCase
{
    protected function makeRepository()
    {
        return new ProductRepository();
    }

    public function testMockProducts()
    {

        // $this->instance(Service::class, Mockery::mock(Service::class, function ($mock) {
        //     $mock->shouldReceive('process')->once();
        // }));

        // $mockRepo = $this->createMock(ProductRepository::class);
        $mockRepo = $this->makeRepository();
        $mockProductsArray = [
            ['id' => 1, 'name' => 'Acme Radio Knobs'],
            ['id' => 2, 'name' => 'Apple Iphone'],
        ];

        $mockRepo->$this->method('fetchProducts')->willReturn($mockProductsArray);

        $products = $mockRepo->fetchProducts();

    }
}
