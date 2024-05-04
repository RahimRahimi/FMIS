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
        Schema::create('deputy_procurement', function (Blueprint $table) {
            $table->foreignId('deputy_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('procurement_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['deputy_id', 'procurement_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputy_procurement');
    }
};
