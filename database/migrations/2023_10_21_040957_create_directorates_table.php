<?php

use App\Enums\GenericStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('directorates')) {
            Schema::create('directorates', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->longText('body');
                $table->string('directors_name')->nullable();
                $table->string('status')->nullable()->default(GenericStatus::enabled());
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('directorates')) {
            Schema::dropIfExists('directorates');
        }
    }
};
