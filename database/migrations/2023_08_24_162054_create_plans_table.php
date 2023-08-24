<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->integer('photos');
            $table->boolean('video');
            $table->boolean('direct');
            $table->integer('price');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};