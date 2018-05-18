<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('url');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('target_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('target_id');
            $table->integer('user_id');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('target_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('target_id');
            $table->integer('category_id');
            $table->integer('parent_category_id');
            $table->string('name');
            $table->string('url');
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
        Schema::dropIfExists('targets');

        Schema::dropIfExists('target_users');

        Schema::dropIfExists('target_categories');
    }
}
