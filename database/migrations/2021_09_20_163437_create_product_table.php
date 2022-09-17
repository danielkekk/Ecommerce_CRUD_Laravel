<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->string('id')->primary();
            $table->integer('amount')->nullable();
            $table->string('barcode')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('summary')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('unit_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
