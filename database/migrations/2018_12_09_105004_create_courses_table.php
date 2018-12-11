<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_name');
            $table->integer('cat_id');
            $table->string('c_title')->nullable();
            $table->text('c_detail')->nullable();
            $table->text('c_course')->nullable();
            $table->text('c_video')->nullable();
            $table->integer('c_price')->default('0');
            $table->integer('c_discount')->default('0');
            $table->string('c_image')->nullable();
            $table->string('c_student')->nullable();
            $table->string('c_time_study')->nullable();
            $table->string('url_course')->nullable();
            $table->string('youtube_course')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
