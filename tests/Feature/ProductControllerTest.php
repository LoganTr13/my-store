<?php

namespace Tests\Feature;

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    
    public function test_it_should_return_all_products(): void
    {
        $product = Product::factory()->create();
        dd($product);
        $response = $this->get('/products');
        $response->assertStatus(200);
        dd($response->getContent());
        
    }
}
