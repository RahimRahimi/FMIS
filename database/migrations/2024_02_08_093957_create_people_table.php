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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('last_name', 40);
            $table->string('father_name', 40);
            $table->string('phone_no', 15)->nullable();
            $table->string('province', 30)->nullable();
            $table->string('district', 30)->nullable();
            $table->foreignId('deputy_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('administration_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('rank', 25);
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
        Schema::dropIfExists('people');
    }
};
