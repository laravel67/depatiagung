<?php

namespace Database\Factories;

use App\Models\Identity;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdentityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Identity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sejarah' => $this->faker->paragraphs(3, true),
            'hymne' => $this->faker->paragraphs(2, true),
            'lambang' => $this->faker->sentence(),
            'user_id' => 1, // Jika user_id harus ada, maka tentukan di sini. Sesuaikan dengan kebutuhan Anda.
        ];
    }
}
