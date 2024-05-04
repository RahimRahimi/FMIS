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
        Schema::create('expense_procurement', function (Blueprint $table) {
            $table->foreignId('administration_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('expense_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['administration_id', 'expense_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_procurement');
    }
};
