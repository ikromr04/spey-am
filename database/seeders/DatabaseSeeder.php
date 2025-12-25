<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $users = array(
      array('id' => '1', 'name' => 'Administration', 'login' => 'speyam@admin.tj', 'password' => '$2y$10$YKn4QAK3Rzh2Il0awc2l/OnO.h9WOV7tFpcdks9Mw42E1rPifpFt.', 'role' => 'admin', 'trashed' => '0', 'remember_token' => NULL, 'created_at' => '2023-01-24 18:17:48', 'updated_at' => '2023-01-24 18:17:48'),
      array('id' => '2', 'name' => 'Admin', 'login' => 'admin@spey.am', 'password' => '$2y$10$Iboz2PkiLCskks9KSoZLfOpPU4us19lDIA5y.IV6Rvv1Wb0uFL7A6', 'role' => 'admin', 'trashed' => '0', 'remember_token' => NULL, 'created_at' => '2023-04-04 19:17:00', 'updated_at' => '2023-04-04 19:17:00')
    );

    foreach ($users as $item) {
      User::create($item);
    }

    $this->call([
      SitesSeeder::class,
      ProductsCategoriesSeeder::class,
      ProductsSeeder::class,
      NewsCategoriesSeeder::class,
      NewsSeeder::class,
      HistoriesSeeder::class,
      PhonesSeeder::class,
      PagesSeeder::class,
      TextsSeeder::class,
      ValuesSeeder::class,
      CompaniesSeeder::class,
    ]);
  }
}
