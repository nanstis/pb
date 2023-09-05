<?php

use App\Models\Advertisement;
use App\Models\CategoryChild;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('advertisement_category_child', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Advertisement::class);
            $table->foreignIdFor(CategoryChild::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advertisement_category_child');
    }
};
