<?php

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
            $table->string('key');
            $table->integer('status');
            $table->integer('type');
            $table->text('message');
            $table->string('url');
            $table->string('user_ip');
            $table->dateTime('insert_time');
            $table->dateTime('publish_time');
            $table->string('facebook_url');
            $table->string('twitter_url');
        });

        $statement = "ALTER TABLE posts AUTO_INCREMENT = 7533;";

        DB::unprepared($statement);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('posts');
    }
}
