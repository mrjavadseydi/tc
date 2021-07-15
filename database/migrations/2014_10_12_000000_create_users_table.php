<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('national_id')->unique();
            $table->string('national_id_photo')->nullable();
            $table->string('profile')->nullable();
            $table->string('degree');
            $table->string('degree_photo')->nullable();
            $table->string('mobile')->unique();
            $table->string('service_location')->nullable();
            $table->string('whatsapp_mobile');
            $table->string('birthday');
            $table->enum('sex',[1,2]);
            $table->string('bank');
            $table->string('graduated_step')->nullable();
            $table->string('student_step')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
