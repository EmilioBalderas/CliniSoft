<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedient', function (Blueprint $table) {
            $table->id();
            $table->string('dentistName');
            $table->string('patientName');
            $table->string('phone', 10);
            $table->enum('sex', ['male', 'female']);
            $table->date('birthdate');
            $table->string('alergies');
            $table->string('sickness');
            $table->string('observaciones');
            $table->string('plan');
            $table->date('creationDate');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedient');
    }
}
