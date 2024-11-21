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
        Schema::create('webinaires', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('description');
            $table->decimal('tarif')->default(0);
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->time('heure_debut');
            $table->time('heure_fin')->nullable();
            $table->longText('image_webinaire')->nullable();
            $table->longText('url_webinaire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinaires');
    }
};
