<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */

    public function test_view_nonexistent_product(): void
    {
        $nonExistentProductId = 9999; // Assuming this ID does not exist in the database

        $response = $this->get('/products/' . $nonExistentProductId);

        $response->assertStatus(404);
    }

    public function test_delete_nonexistent_product(): void
    {
        $response = $this->delete('/products/9999');
        $response->assertStatus(404);
    }

    public function test_show_products_empty(): void
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }
}
