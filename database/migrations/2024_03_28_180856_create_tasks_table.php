<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');


            $table->string('assigned_to');
            $table->string('assigned_by');
            // $table->unsignedInteger('assigned_to');
            // $table
            // ->foreign('assigned_to')
            // ->references('id')
            // ->on('users');
            // $table->unsignedInteger('assigned_by');
            // $table
            // ->foreign('assigned_by')
            // ->references('id')
            // ->on('users');
            $table->timestamps();
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