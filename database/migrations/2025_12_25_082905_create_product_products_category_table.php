<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductsCategoryTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('product_products_category', function (Blueprint $table) {
      $table->id();

      $table->foreignId('product_id')
        ->constrained()
        ->cascadeOnDelete();

      $table->foreignId('products_category_id')
        ->constrained()
        ->cascadeOnDelete();

      $table->unique(['product_id', 'products_category_id']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('product_products_category');
  }
}
