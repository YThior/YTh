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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('image');
            $table->longText('contenu');
            $table->timestamps();
            $table->usingnedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('categories') ;

            $table->usingnedBigInteger('id_role');
            $table->foreign('id_role')->references('id')->on('role') ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
