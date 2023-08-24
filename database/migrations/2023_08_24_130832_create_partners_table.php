<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->string('name')->unique();
            $table->string('state');
            $table->string('address');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('cover')->nullable();
            $table->string('slogan')->nullable();
            $table->string('summary');
            $table->string('description');
            $table->string('french')->nullable();
            $table->string('english')->nullable();
            $table->string('german')->nullable();
            $table->string('italian')->nullable();
            $table->string('other')->nullable();
            $table->string('website')->nullable()->unique();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('vimeo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
