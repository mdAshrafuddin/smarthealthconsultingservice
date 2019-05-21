<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppoinmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',251);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',251);
            $table->string('phone',251);
            $table->string('enter_area',251);
            $table->string('enter_city',251);
            $table->string('enter_state',251);
            $table->string('post_code',251);
            $table->timestamp('appoinment_date')->nullable();
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
        Schema::dropIfExists('appoinments');
    }
}
