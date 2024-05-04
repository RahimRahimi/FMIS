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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->unsignedBigInteger('payee_id');
            $table->foreign('payee_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->foreignId('budget_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('amount', 12);
            $table->unsignedBigInteger('payer_id');
            $table->foreign('payer_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->unsignedBigInteger('recipient_id');
            $table->foreign('recipient_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->unsignedBigInteger('reference_id');
            $table->foreign('reference_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->string('date', 15);
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
        Schema::dropIfExists('expenses');
    }
};
