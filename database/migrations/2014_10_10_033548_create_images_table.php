<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('images')) {
            Schema::create('images', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('imageable_id');
                $table->string('imageable_type');
                $table->string('path');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('imagess')) {
            Schema::dropIfExists('images');
        }
    }
};
