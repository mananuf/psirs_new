<?php

use App\Enums\GenericStatus;
use App\Models\Image;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->foreignIdFor(Role::class)->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->foreignIdFor(Image::class)->nullable()->constrained();
                $table->string('status')->nullable()->default(GenericStatus::enabled());
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('users')) {
            Schema::dropIfExists('users');
        }
    }
};
