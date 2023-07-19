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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->text('image')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->rememberToken();
            $table->timestamps();
            $table->date('birthday');
            $table->foreignId('grade_id')->nullable()->constrained('grades')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('address')->nullable();
            $table->text('facebook')->nullable();
            $table->text('nu_father')->nullable();
            $table->text('our_father')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
