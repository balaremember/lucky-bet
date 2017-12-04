<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => 'Футбол/Клубный/Лига Чемпионов УЕФА'],
            ['id' => 2, 'category_name' => 'Футбол/Клубный/Лига Европы УЕФА'],
            ['id' => 3, 'category_name' => 'Хоккей/Сборные/Кубок мира'],
            ['id' => 4, 'category_name' => 'Хоккей/Сборные/Кубок Первого канала'],
            ['id' => 5, 'category_name' => 'Футбол/Клубный/Англия/Премьер-лига'],
            ['id' => 6, 'category_name' => 'Футбол/Клубный/Россия/Кубок России'],
            ['id' => 7, 'category_name' => 'Футбол/Клубный/Россия/Премьер-лига'],
            ['id' => 8, 'category_name' => 'Хоккей/Клубный/КХЛ'],
            ['id' => 9, 'category_name' => 'Хоккей/Клубный/НХЛ'],
            ['id' => 10, 'category_name' => 'Теннис/Мужской/Кубок Кремля'],
            ['id' => 11, 'category_name' => 'Теннис/Женский/Кубок Кремля'],
            ['id' => 12, 'category_name' => 'Баскетбол/Мужской/NBA'],
            ['id' => 13, 'category_name' => 'Баскетбол/Женский/NBA'],
            ['id' => 14, 'category_name' => 'Баскетбол/Мужской/Единая лига ВТБ'],
            ['id' => 15, 'category_name' => 'Баскетбол/Женский/Единая лига ВТБ'],
            ['id' => 16, 'category_name' => 'Футбол/Сборные/ЧМ'],
            ['id' => 17, 'category_name' => 'Бокс'],
            ['id' => 18, 'category_name' => 'Мотоспорт'],
            ['id' => 19, 'category_name' => 'Шахматы/Чемпионат Мира'],
            ['id' => 20, 'category_name' => 'Шахматы/Чемпионат России'],
            ['id' => 21, 'category_name' => 'Биатлон/Мужчины'],
            ['id' => 22, 'category_name' => 'Биатлон/Женщины'],
            ['id' => 23, 'category_name' => 'Гандбол/Мужчины/Чемпионат Европы'],
            ['id' => 24, 'category_name' => 'Гандбол/Женщины/Чемпионат Европы'],
            ['id' => 25, 'category_name' => 'Гандбол/Мужчины/Чемпионат Мира'],
            ['id' => 26, 'category_name' => 'Гандбол/Женщины/Чемпионат Мира'],
            ['id' => 27, 'category_name' => 'Хоккей с мячом/Мужчины/Чемпионат Мира'],
            ['id' => 28, 'category_name' => 'Хоккей с мячом/Женщины/Чемпионат Мира']
        ]);
    }
}
