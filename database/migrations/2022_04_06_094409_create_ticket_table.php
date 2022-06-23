<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->smallInteger('time');
            $table->text('location');
            $table->timestamps();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('assignee_id')->nullable();
            $table->foreign('author_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('assignee_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
