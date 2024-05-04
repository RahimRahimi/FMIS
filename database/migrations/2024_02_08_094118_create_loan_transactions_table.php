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
        Schema::create('loan_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained('loans')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('amount', 10);
            $table->string('date', 15);
            $table->unsignedBigInteger('recipient_id');
            $table->foreign('recipient_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
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
        Schema::dropIfExists('loan_transactions');
    }
};
