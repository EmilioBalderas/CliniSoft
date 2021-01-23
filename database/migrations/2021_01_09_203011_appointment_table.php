<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->string('PatientName')->nullable();
            $table->string('DoctorID');
            $table->dateTime('hour');
            $table->enum('service', ['protesis', 'ortodoncia', 'endodoncia', 'cirugía maxilofacial', 'implantología', 'otro'])->nullable();

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
