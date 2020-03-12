<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('web_id');
            $table->string('amount');
            $table->integer('quantity');
            $table->string('available');
            $table->string('condition');
            $table->string('brand');
            $table->integer('status')->default(0);
            $table->integer('admin_id')->default(0);
            $table->timestamps();

            $table->index('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
