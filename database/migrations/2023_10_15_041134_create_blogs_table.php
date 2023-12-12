<?php

use App\Enums\GenericStatus;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->longText('body');
                $table->foreignIdFor(User::class)->nullable()->constrained();
                $table->string('status')->nullable()->default(GenericStatus::enabled());
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('blogs')) {
            Schema::dropIfExists('blogs');
        }
    }
};
