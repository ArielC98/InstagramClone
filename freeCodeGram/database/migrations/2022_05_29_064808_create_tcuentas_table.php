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
        Schema::create('tcuentas', function (Blueprint $table) {
            $table->id('CCUENTA');
            $table->string('TIPOCUENTA');
            $table->string('USUARIO');
            $table->string('CLAVE');
            $table->timestamp('FDESDE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcuentas');
    }
};
