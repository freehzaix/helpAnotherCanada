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
        Schema::create('annuaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->longText('description')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('telephone')->nullable();
            $table->longText('logo')->default('https://static-00.iconduck.com/assets.00/no-image-icon-2048x2048-2t5cx953.png');
            $table->boolean('status');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annuaires');
    }
};
