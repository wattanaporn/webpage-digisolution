<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_title',255)->nullable();
            $table->string('meta_description',255)->nullable();
            $table->string('meta_keyword',255)->nullable();
            $table->text('title',255)->nullable();
            $table->text('content')->nullable();
            $table->string('path_img_banner',255)->nullable();
            $table->string('page_type',255)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('contents');
    }
}
