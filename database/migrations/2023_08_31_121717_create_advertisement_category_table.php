<?php

use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advertisement_category', function (Blueprint $table) {
            $table->foreignIdFor(Advertisement::class);
            $table->foreignIdFor(Category::class);
            $table->primary(['advertisement_id', 'category_id'], 'id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advertisement_category');
    }
};
