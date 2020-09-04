<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->integer('sort_order')->unsigned()->nullable();
            $table->timestamps();
        });


        # Translation.
        Schema::create('transfers_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transfer_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('slug')->nullable();
            $table->string('locale')->index();
            $table->unique(['transfer_id', 'locale']);
            $table->foreign('transfer_id')->references('id')->on('transfers')->onDelete('set null');
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
        Schema::dropIfExists('transfers');
    }
}
