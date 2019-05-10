<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillboardModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billboard_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('company');
            $table->char('sitecode');
            $table->char('width');
            $table->char('height');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->string('sitetype');
            $table->char('model');
            $table->string('region');
            $table->string('district');
            $table->string('city');
            $table->integer('image');
            $table->string('address');
            $table->integer('digital');
            $table->string('faces');
            $table->char('environment');
            $table->string('illumination');
            $table->char('orientation');
            $table->text('position');
            $table->char('status');
            $table->char('advertiser');
            $table->string('client');
            $table->text('links');
            $table->text('video_links');
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
        Schema::dropIfExists('billboard_models');
    }
}
