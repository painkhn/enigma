<?php

namespace Database\Seeders;


use App\Models\{Theme, Category, User};
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        try {
            User::factory()->create([
                'name' => 'root',
                'email' => 'root@mail.ru',
                'age' => 12,
                'password' => Hash::make('admin')
            ]);
            Category::factory()->create([
                'name' => 'Комьюнити',
                'link' => 'community',
            ]);
            Category::factory()->create([
                'name' => 'Киберспорт',
                'link' => 'cybersport',
            ]);
            Category::factory()->create([
                'name' => 'Разработка',
                'link' => 'development',
            ]);
            Category::factory()->create([
                'name' => 'Торговля',
                'link' => 'trading',
            ]);
            Category::factory()->create([
                'name' => 'Блог',
                'link' => 'blog',
            ]);
            Theme::factory()->create([
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'Победа NAVI',
                'content' => 'Текст с описанием победы нави',
            ]);
        } catch (Exception $e) {
            echo 'PHP перехватил исключение: ',  $e->getMessage(), "\n";
        }
    }
}
