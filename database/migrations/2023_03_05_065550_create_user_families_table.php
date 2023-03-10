<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_families', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ã¦ã¼ã¶ã¼ID'); // ð è¿½å 
            $table->unsignedBigInteger('family_id')->comment('å®¶ææ§æID'); // ð è¿½å 
            // $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // ð è¿½å 
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade'); // ð è¿½å 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_families');
    }
};
