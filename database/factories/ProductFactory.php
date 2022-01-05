<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $product_name = $this->faker->unique()->words($nb=4, $asText=true);
        $slug = Str::slug($product_name);
    	return [
    	    'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(400),
            'regular_price' => $this->faker->numberBetween(10,500),
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'digital_'. $this->faker->unique()->numberBetween(1,10).'.jpg',
            'category_id' => $this->faker->numberBetween(1,10)
    	];
    }
}
