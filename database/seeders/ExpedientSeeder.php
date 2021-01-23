<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ExpedientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expedient')->insert([
            'dentistName' => 'NombreDentista ApellidoDentista',
            'patientName' => 'NombrePaciente ApellidoPaciente',
            'phone' => '0123456789',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'alergies' => 'Polvo',
            'sickness' => 'Ninguna',
            'observaciones' => 'Ninguna',
            'plan' => 'Ningun plan',
            'creationDate' => now()
        ]);
        DB::table('expedient')->insert([
            'dentistName' => 'NombreDentista ApellidoDentista',
            'patientName' => 'NombrePaciente ApellidoPaciente',
            'phone' => '0123456789',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'alergies' => 'Polvo',
            'sickness' => 'Ninguna',
            'observaciones' => 'Ninguna',
            'plan' => 'Ningun plan',
            'creationDate' => now()
        ]);
        DB::table('expedient')->insert([
            'dentistName' => 'NombreDentista ApellidoDentista',
            'patientName' => 'NombrePaciente ApellidoPaciente',
            'phone' => '0123456789',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'alergies' => 'Polvo',
            'sickness' => 'Ninguna',
            'observaciones' => 'Ninguna',
            'plan' => 'Ningun plan',
            'creationDate' => now()
        ]);
        //--------------------------------------

        DB::table('expedient')->insert([
            'dentistName' => 'NombreDentista2 ApellidoDentista2',
            'patientName' => 'NombrePaciente2 ApellidoPaciente2',
            'phone' => '0123456789',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'alergies' => 'Polvo',
            'sickness' => 'Ninguna',
            'observaciones' => 'Ninguna',
            'plan' => 'Ningun plan',
            'creationDate' => now()
        ]);
        DB::table('expedient')->insert([
        'dentistName' => 'NombreDentista3 ApellidoDentista3',
        'patientName' => 'NombrePaciente3 ApellidoPaciente3',
        'phone' => '0123456789',
        'sex' => 'Male',
        'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),
        'alergies' => 'Polvo',
        'sickness' => 'Ninguna',
        'observaciones' => 'Ninguna',
        'plan' => 'Ningun plan',
        'creationDate' => now()
        ]);
        DB::table('expedient')->insert([
            'dentistName' => 'NombreDentista2 ApellidoDentista2',
            'patientName' => 'NombrePaciente2 ApellidoPaciente2',
            'phone' => '0123456789',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'alergies' => 'Polvo',
            'sickness' => 'Ninguna',
            'observaciones' => 'Ninguna',
            'plan' => 'Ningun plan',
            'creationDate' => now()
        ]);

    }
}
