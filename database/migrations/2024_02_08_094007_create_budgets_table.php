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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('type',20);
            $table->decimal('amount', 12)->default(0);
            $table->decimal('remaining_amount', 12);
            $table->string('start_date',15)->nullable();
            $table->string('end_date',15)->nullable();
            $table->string('date',15)->nullable();
            $table->text('description')->nullable();
            $table->string('created_by', 30);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
