<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTontine1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tontine1s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('duree_du_cycle');
            $table->integer('montant_de_contribution');
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
        Schema::dropIfExists('tontine1s');
    }
}
