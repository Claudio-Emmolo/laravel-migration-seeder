<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 100)->change();
            $table->string('stazione_partenza', 100)->change();
            $table->string('stazione_arrivo', 100)->change();
            $table->string('codice_treno', 8)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 150)->change();
            $table->string('stazione_partenza', 150)->change();
            $table->string('stazione_arrivo', 150)->change();
            $table->string('codice_treno', 50)->change();
        });
    }
};
