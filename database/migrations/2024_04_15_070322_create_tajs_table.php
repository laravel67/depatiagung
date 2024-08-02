<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tajs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('chief');
            $table->enum('status', [0, 1])->default(1);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tajs');
    }
};
