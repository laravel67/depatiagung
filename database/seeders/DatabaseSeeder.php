<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Guru;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Category;
use App\Models\Daftar;
use App\Models\Identity;
use App\Models\Register;
use App\Models\Sambutan;
use App\Models\Student;
use App\Models\Taj;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Taj::factory()->create(['name' => '2023-2024', 'chief' => 'Murtaki Shihab']);
        Taj::factory()->create(['name' => '2024-2025', 'chief' => 'Murtaki Shihab']);
        Taj::factory()->create(['name' => '2026-2027', 'chief' => 'Murtaki Shihab']);
        User::factory(10)->create();
        Post::factory(100)->create();
        Category::factory(10)->create();
        // Guru::factory(10)->create();
        // Mapel::factory(5)->create();
        Student::factory(100)->create();
        // Sambutan::factory(1)->create();

        // $faker = Factory::create();
        // Identity::factory()->create([
        //     'sejarah' => $faker->paragraphs(3, true),
        //     'hymne' => $faker->paragraphs(2, true),
        //     'lambang' => $faker->sentence(),
        //     'user_id' => 1,
        // ]);
        User::factory()->create([
            'name' => 'Murtaki',
            'username' => 'murtaki99',
            'email' => 'admin@gmail.com',
            'phone' => '082279761815',
            'password' => '123',
            'role' => 'admin',
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
