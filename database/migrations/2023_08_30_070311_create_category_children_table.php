<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('category_children', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);

            $table->string('en');
            $table->string('fr');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_children');
    }
};
