<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NewsCategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $categories = array(
      array('id' => '1', 'en_title' => 'Interesting', 'ru_title' => 'Интересное', 'view_rate' => '4415', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2025-12-25 06:13:47'),
      array('id' => '2', 'en_title' => 'Pharmaceutical', 'ru_title' => 'Фармацевтика', 'view_rate' => '4470', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2025-12-25 07:59:49'),
      array('id' => '3', 'en_title' => 'Medicine', 'ru_title' => 'Медицина', 'view_rate' => '4943', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2025-12-25 07:51:15'),
      array('id' => '4', 'en_title' => 'Vaccine', 'ru_title' => 'Вакцина', 'view_rate' => '2009', 'trashed' => '0', 'created_at' => '2022-02-11 18:29:56', 'updated_at' => '2025-12-24 20:42:41')
    );

    foreach ($categories as $item) {
      NewsCategory::create($item);
    }
  }
}
