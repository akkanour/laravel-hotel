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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->string("nom", 25);
            $table->string("prenom", 25);
            $table->string("adresse", 50);
            $table->string("numTel",15);
            $table->enum("typePoste",["Directeur","Manager","Receptionniste","ValetDeChambre","Serveur","Employe"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
