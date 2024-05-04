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
        Schema::create('deputy_expense', function (Blueprint $table) {
            $table->foreignId('deputy_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('expense_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['deputy_id', 'expense_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputy_expense');
    }
};
