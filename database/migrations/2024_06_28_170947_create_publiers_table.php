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
        Schema::create('publiers', function (Blueprint $table) {
            $table->id();
            $table->string('lieu');
            $table->string('categorie');
            $table->string('heure_arrivee');
            $table->string('titre_de_publication');
            $table->string('kilos_disponible');
            $table->string('disponibilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('nationalite');
            $table->string('ville_destination');
            $table->string('heure_depart');
            $table->string('ville_depart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publiers');
    }
};
