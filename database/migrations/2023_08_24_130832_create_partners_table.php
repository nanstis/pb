<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->string('address');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('cover')->nullable();
            $table->string('slogan')->nullable();
            $table->text('summary');
            $table->longText('description');
            $table->boolean('french')->default(true);
            $table->boolean('english')->default(false);
            $table->boolean('german')->default(false);
            $table->boolean('italian')->default(false);
            $table->boolean('other')->default(false);
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
