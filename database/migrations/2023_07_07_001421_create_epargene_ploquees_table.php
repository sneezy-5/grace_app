<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpargenePloqueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epargene_ploquees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('type_epargne');
            $table->integer('mode_de_contriution');
            $table->integer('montant_de_la_contribution');
            $table->integer('duree');
            $table->integer('montant_du_gain');
            $table->integer('montant_des_interet');
            $table->integer('montant_gain');
            $table->integer('frais_de_gestion');
            $table->integer('montant_net_gain');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epargene_ploquees');
    }
}
