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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('name', 45);
            $table->string('phone', 12);
            $table->string('father', 45);
            $table->string('mother', 45);
            $table->string('birthdate', 12);
            $table->char('genre', 1);
            $table->integer('province');
            $table->integer('county');
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
        Schema::dropIfExists('members');
    }
};
