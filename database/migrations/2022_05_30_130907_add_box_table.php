<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('desc');
            $table->string('price');
            $table->string('badge')->nullable();
            $table->bigInteger('price_diff')->nullable();
            $table->boolean('is_opened')->default(false);
            $table->boolean('is_ordered')->default(false);
            $table->boolean('is_shipped')->default(false);
            $table->smallInteger('discount')->nullable();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('category_id');
//            $table->unsignedBigInteger('badge_id');
            $table->string('image');
            $table->string('tracking_id');
            $table->timestamps();

//            $table->foreign('badge_id')
//                ->references('id')
//                ->on('badges')
//                ->onDelete('cascade');

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxes');
    }
};
