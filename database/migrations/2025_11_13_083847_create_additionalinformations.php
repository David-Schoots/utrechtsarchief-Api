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
        Schema::create('additionalinformations', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId('panorama_id')->constrained('panoramas')->onDelete('cascade');
            $table->text("description");
            $table->string("img");
            $table->decimal("cordinate_x");
            $table->decimal("cordinate_y");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additionalinformations');
    }
};