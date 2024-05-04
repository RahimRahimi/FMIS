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
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payee_id');
            $table->foreign('payee_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->string('item', 40);
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->foreignId('budget_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('currency_code');
            $table->foreign('currency_code')->references('code')->on('currencies')->onDelete('no action')->onUpdate('cascade');
            $table->string('location', 30);
            $table->unsignedBigInteger('payer_id');
            $table->foreign('payer_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->unsignedBigInteger('recipient_id');
            $table->foreign('recipient_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
            $table->string('date', 15);
            $table->unsignedBigInteger('reference_id');
            $table->foreign('reference_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
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
        Schema::dropIfExists('procurements');
    }
};
