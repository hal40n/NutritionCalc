<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_name');
            $table->unsignedBigInteger('food_code'); // food_code カラムを外部キーとして使用
            $table->integer('quantity');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_name')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('food_code')->references('food_code')->on('food')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_name']);
            $table->dropForeign(['food_code']);
        });
            
            Schema::dropIfExists('order_info');
    }
}
