<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('age');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('dev_type');
            $table->text('dev_description');
            $table->string('avatar');
            $table->text('skill');
            $table->text('work');
            $table->text('edu');
            $table->string('status')->default('Deactive');
            $table->string('status_color')->default('badge-secondary');
            $table->string('btn_status')->default('Active');
            $table->string('btn_status_color')->default('btn-danger');
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
        Schema::dropIfExists('resumes');
    }
}
