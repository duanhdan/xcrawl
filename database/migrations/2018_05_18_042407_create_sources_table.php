<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('source_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('workspace_source', function (Blueprint $table) {
            $table->integer('workspace_id');
            $table->integer('source_id');
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
        Schema::dropIfExists('sources');

        Schema::dropIfExists('source_categories');

        Schema::dropIfExists('workspace_source');
    }
}
