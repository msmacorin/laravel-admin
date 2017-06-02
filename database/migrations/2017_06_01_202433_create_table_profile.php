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
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
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
