<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpargneCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epargne_credits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('type_epargne');
            $table->integer('Montant_du_pret_sollicite');
            $table->integer('montant_epargne_a_constituer');
            $table->integer('capacite_d_pargne');
            $table->integer('duree_necessaire');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epargne_credits');
    }
}
