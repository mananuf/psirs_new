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
                $table->json('roles');
                $table->string('directors_name');
                $table->unsignedBigInteger('directors_image_id')->nullable();
                $table->unsignedBigInteger('directorate_image_id')->nullable();
                $table->string('status')->nullable()->default(GenericStatus::enabled());
                $table->timestamps();

                // foreign keys
                $table->foreign('directors_image_id')->references('id')->on('images')->onDelete('set null');
                $table->foreign('directorate_image_id')->references('id')->on('images')->onDelete('set null');
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
