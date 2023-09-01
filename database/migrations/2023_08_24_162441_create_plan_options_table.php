<?php

use App\Models\Plan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('plan_options', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_count');
            $table->integer('sub_categories_count');
            $table->integer('group');
            $table->foreignIdFor(Plan::class, 'plan_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plan_options');
    }
};
