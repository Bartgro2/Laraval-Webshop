<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductFilterTest extends TestCase
{
    use RefreshDatabase;

    public function test_filter_products_by_category(): void
    {
        $response = $this->get('/products?category_id=1');

        $response->assertStatus(200);
    }
}
