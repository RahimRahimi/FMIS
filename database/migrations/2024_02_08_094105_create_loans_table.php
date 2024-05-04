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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('borrower_id');
            $table->foreign('borrower_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->decimal('amount', 10, 2);
            $table->decimal('remaining_amount', 10, 2);
            $table->foreignId('budget_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('date', 15);
            $table->string('term', 15)->nullable();
            $table->unsignedBigInteger('payer_id');
            $table->foreign('payer_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('loans');
    }
};
