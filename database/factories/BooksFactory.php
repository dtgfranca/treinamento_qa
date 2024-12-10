<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BooksFactory extends Factory
{
    protected $model = Books::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'author' => $this->faker->word(),
            'ano' => $this->faker->word(),
            'edition' => $this->faker->word(),
            'isnb_number' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
