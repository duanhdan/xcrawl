<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workspace_id');
            $table->integer('link_id');
            $table->integer('user_id');
            $table->integer('target_id');
            $table->integer('target_category_id');
            $table->string('title');
            $table->string('slug');
            $table->string('slug_prefix');
            $table->string('slug_suffix');
            $table->string('image');
            $table->text('description');
            $table->mediumText('content');
            $table->string('tags');
            $table->string('post_status');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('posts');
    }
}
