<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email');
            // $table->string('password');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('img');
            // $table->string('words');
            // $table->boolean('is_active');
            // $table->text('paragraph');
            // $table->string('sentence');
            // $table->text('human_word');
            // $table->string('non_human_word');
            // $table->integer('num_of_times');
            // $table->timestamp('this_year');
            // $table->text('emoji');

            $table->string('task_name');
            $table->foreignId('project_id')->constrained('projects','id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
