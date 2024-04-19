<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_identitas' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'nama' => $this->faker->name,
            'ta_id' => 1,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'agama' => $this->faker->randomElement(['Islam', 'Katolik', 'Protestan', 'Hindu', 'Budha', 'Lainya']),
            'kewarganegaraan' => $this->faker->randomElement(['WNI', 'WNA']),
            'negara' => $this->faker->country,
            'provinsi' => $this->faker->state,
            'kabupaten' => $this->faker->citySuffix,
            'kecamatan' => $this->faker->streetSuffix,
            'alamat' => $this->faker->address,
            'kode_pos' => $this->faker->postcode,
            'nama_ayah' => $this->faker->name('male'),
            'nama_ibu' => $this->faker->name('female'),
            'pekerjaan_ayah' => $this->faker->jobTitle,
            'pekerjaan_ibu' => $this->faker->jobTitle,
            'telphone_ayah' => $this->faker->numerify('08##########'), // Contoh untuk nomor telepon Indonesia
            'telphone_ibu' => $this->faker->numerify('08##########'),
            'asal_sekolah' => $this->faker->company,
            'status' => $this->faker->randomElement(['baru', 'pindahan']),
            'jenjang' => $this->faker->randomElement(['mts', 'ma']),
            'kontak' => $this->faker->numerify('08##########'),
            'email' => $this->faker->unique()->safeEmail,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
