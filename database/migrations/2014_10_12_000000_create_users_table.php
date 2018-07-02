<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->integer('role')->default(5);
			$table->integer('active')->default(1);
			$table->integer('created_by')->default(0);
			$table->integer('times_login')->default(0);
			$table->timestamp('last_login')->useCurrent();
			$table->string('last_login_ip')->default(0);
			$table->softDeletes();
			
			$table->timestamps();
			$table->rememberToken();
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
