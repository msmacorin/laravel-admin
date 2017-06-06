<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfile extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 15)->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('city')->nullable();
            $table->string('state', 2)->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('profiles');
    }

}
