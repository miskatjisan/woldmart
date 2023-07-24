<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();

            $table->integer('category_id');
            $table->string('post_title_en');
            $table->string('post_title_others');
            $table->string('post_slug_en');
            $table->string('post_slug_others');
            $table->string('post_tag_en');
            $table->string('post_tag_others');
            $table->string('post_tag_slug_en')->nullable();
            $table->string('post_tag_slug_others')->nullable();
            $table->string('post_image');
            $table->text('post_details_en');
            $table->text('post_details_others');
            $table->integer('popular_posts')->nullable();


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
        Schema::dropIfExists('blog_posts');
    }
}
