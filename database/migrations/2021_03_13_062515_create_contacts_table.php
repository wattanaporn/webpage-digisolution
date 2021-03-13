<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('tell', 50)->nullable();
            $table->string('topic', 255)->nullable();
            $table->text('note')->nullable();
            $table->text('address')->nullable();
            $table->string('lat', 255)->nullable();
            $table->string('long', 255)->nullable();
            $table->string('path_logo', 255)->nullable();
            $table->text('facebook_page')->nullable();
            $table->string('copyright', 255)->nullable();
            $table->string('type', 255)->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
