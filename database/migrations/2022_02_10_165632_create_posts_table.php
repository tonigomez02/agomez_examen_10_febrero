<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->string("title");
            $table->string("summary")->nullable();
            $table->string("description");
            $table->string("access");
            $table->boolean("expired")->nullable();
            $table->boolean("commentable")->nullable();
            $table->date("date_publication");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")
                ->onUpdate("cascade")
                ->onDelete("set null");
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
