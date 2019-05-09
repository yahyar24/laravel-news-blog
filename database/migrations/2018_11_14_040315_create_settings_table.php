<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('contact_number');
            $table->string('contact_email');
            $table->string('address');
            $table->string('iphone');
            $table->string('anderwed');
            $table->string('rebot');
            $table->string('esay');
            $table->string('iphone_b');
            $table->string('anderwed_b');
            $table->string('rebot_b');
            $table->string('esay_b');
            $table->string('amet');
            $table->string('amet_b');
            $table->string('amet_bo');
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
        Schema::dropIfExists('settings');
    }
}
