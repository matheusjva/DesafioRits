<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        /*
         * Insere o usuário admin
         */
        $adminId = DB::table('users')->insertGetId([
            'email' => 'admin@example.org',
            'password' => bcrypt('secret'),
            'name' => 'Admin',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $adminId = DB::table('users')
            ->where('email', '=', 'admin@example.org')
            ->pluck('id')
            ->first();
        DB::table('users')->where('id', '=', $adminId)->delete();

        Schema::dropIfExists('users');
    }
}
