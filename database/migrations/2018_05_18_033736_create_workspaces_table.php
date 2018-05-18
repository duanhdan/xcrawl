<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('workspace_user', function (Blueprint $table) {
            $table->integer('workspace_id');
            $table->integer('user_id');
            $table->integer('role_id');
            $table->timestamps();
            $table->primary(['workspace_id', 'user_id', 'role_id']);
        });

        Schema::create('user_states', function (Blueprint $table) {
            $table->integer('user_id')->primary();
            $table->integer('workspace_id');
            $table->integer('role_id');
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
        Schema::dropIfExists('workspaces');

        Schema::dropIfExists('workspace_user');

        Schema::dropIfExists('user_states');
    }
}
