<?php

namespace Database\Factories;

use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    protected $model = products::class;
     // @return array<string, mixed>
     
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->numberBetween(),
            'existencias'=>$this->faker->sentence(),
            'proveedor'=>$this->faker->randomElement(['Amway', 'Johnson & Johnson', 'Colgate Palmolive']),

        ];
    }
}
