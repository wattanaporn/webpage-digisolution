<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsernameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 255)->nullable();
            $table->dropColumn('email');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('email',255)->nullable();
        });

        \DB::table('users')->insert([
            'name' => 'Digiso',
            'username' => 'digiso',
            'password' => '$2y$10$qqo/AooBiwQtNuG3JFOq/edO1t2GgasSd2VnEcn1yL7uYFFjmknZ.' //Digiso2021
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
