<?php

use App\Models\Ticket;
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
            $table->string('description');
            $table->smallInteger('time');
            $table->string('location');
            $table->enum('priority', Ticket::AVAILABLE_PRIORITIES)->default(Ticket::PRIORITY_LOW);
            $table->enum('status', Ticket::AVAILABLE_STATUSES)->default(Ticket::STATUS_TO_DO);
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
