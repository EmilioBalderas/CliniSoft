<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
            $table->string('password');
            $table->enum('usertype', ['Dentista', 'Paciente']);
            $table->string('dentistName')->nullable();
            $table->string('patientName')->nullable();
            $table->enum('speciality', ['Odontologo', 'Protesista'])->nullable();
            $table->string('clinic')->nullable();
            $table->string('services')->nullable();
            $table->string('phone')->nullable();
            $table->enum('sex', ['Male', 'Female'])->nullable();
            $table->string('birthdate')->nullable();
            $table->string('mail')->nullable();
            $table->rememberToken();
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
        //
    }
}
