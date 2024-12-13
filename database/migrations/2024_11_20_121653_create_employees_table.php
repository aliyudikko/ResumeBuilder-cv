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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('project');
            $table->string('award');
            $table->string('summary');
            $table->string('references');
            $table->string('img');
            $table->string('certificate')->nullable();
            $table->string('experience')->nullable();
            $table->string('reward')->nullable(); 
            $table->foreignId('user_id')->constrained('users');
            $table->string('template_name')->nullable(); 
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
       
    }
};
