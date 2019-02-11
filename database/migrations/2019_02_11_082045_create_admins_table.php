<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('phone')->unique();
            $table->string('images')->nullable();
            // $table->unsignedInteger('level');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->enum('status',[0, 1])->default(1);
            // 0: Dừng hđ, 1: HĐ
            
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
        Schema::dropIfExists('admins');
    }
}
