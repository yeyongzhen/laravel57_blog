<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->comment('标题');
            $table->string('summary')->comment('描述');
            $table->string('slug')->unique();
            $table->text('content')->comment('内容');
            $table->longText('html_content')->comment('html格式的content');
            $table->tinyInteger('status')->default(0)->comment('状态 0:草稿;1:发布');
            $table->integer('topic_id')->nullable()->comment('专题ID');
            $table->integer('views')->default(0)->comment('浏览量');
            $table->tinyInteger('isOriginal')->default(0)->comment('原创 0:yes;1:no');
            $table->string('reference')->nullable()->comment('出处');
            $table->string('description')->nullable()->comment('网页描述');
            $table->string('keywords')->nullable()->comment('网页关键词');
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
        Schema::dropIfExists('articles');
    }
}
