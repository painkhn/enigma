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
                'is_admin' => TRUE,
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
                'category_id' => 2,
                'user_id' => 1,
                'name' => 'Победа NAVI',
                'content' => 'Что стало с NaVi после ухода Александра S1mple Костылева? А вот что. Нави в составе с w0nderful на роли снайпера команды выиграли MAJOR 2024, обыграв Faze в финале. JL стал MVP турнира, показав невероятную статистику с rating 2.0 более 1.7 Aleksib исполнил свою мечту и крутил кофтой на столе после победы Karrigan не верит в своё поражение. Многие говорят, что если бы Twistzz не ушёл из состава, то этот турнир бы выиграли Faze. Аналитики не верят в победу NaVi, но кубок из их офиса уже никто не уберёт. Тренер команды подметил это в своих соц. сетях, сказав, что дальше будет только лучше. СНГ регион никогда не был так силён. ВПЕРЁД ВПЕРЁД!',
            ]);
        } catch (Exception $e) {
            echo 'PHP перехватил исключение: ',  $e->getMessage(), "\n";
        }
    }
}
