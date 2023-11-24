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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('thumb')->nullable();
            $table->json('tags')->nullable();
            $table->string('glass_type', 50)->nullable();
            $table->json('ingredients')->nullable();
            $table->boolean('is_alcoholic')->default(1)->nullable();
            $table->text('instructions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
