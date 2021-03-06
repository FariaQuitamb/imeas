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
        Schema::create('eclesiastics', function (Blueprint $table) {
            $table->id();
            $table->integer('startat');
            $table->integer('how');
            $table->foreignId('member_id')->constrained('members');
            $table->foreignId('classe_id')->constrained('classes');
            $table->foreignId('department_id')->constrained('departments');
            $table->integer('baptized');
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
        Schema::dropIfExists('eclesiastics');
    }
};
