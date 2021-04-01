<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_sn', 100);
            $table->integer('price')->default(5000);
            $table->char('room_type', 100)->nullable();
            $table->tinyInteger('room_capacity')->default(2);
            $table->char('room_status',100)->default('available');
            $table->text('room_description')->nullable();
            $table->string('room_image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
