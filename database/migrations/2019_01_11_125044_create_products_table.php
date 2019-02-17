<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('price');
            $table->string('negotiable')->nullable();
            $table->string('condition');
            $table->text('name')->nullable();
            $table->string('phone');
            $table->text('email');
            $table->integer('user_id')->nullable()->unsigned();
            $table->text('state');
            $table->text('lga');
            $table->integer('category_id')->unsigned();
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->boolean('live')->default(0);
            $table->string('filename');
           // $table->string('thumbnail');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign( 'user_id')->references('id')->on('users')->onDelete('cascade');
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
