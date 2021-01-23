<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paciente_1',
            'password' => bcrypt('Paciente_1'),
            'usertype' => 'Paciente',
            'patientName' => 'NombrePaciente ApellidoPaciente',
            'phone' => '0123456789',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+3 hours")),

        ]);
        DB::table('users')->insert([
            'name' => 'Paciente_2',
            'password' => bcrypt('Paciente_2'),
            'usertype' => 'Paciente',
            'patientName' => 'NombrePaciente2 ApellidoPaciente2',
            'phone' => '9874561230',
            'sex' => 'Female',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+4 hours")),

        ]);
        DB::table('users')->insert([
            'name' => 'Paciente_3',
            'password' => bcrypt('Paciente_3'),
            'usertype' => 'Paciente',
            'patientName' => 'NombrePaciente3 ApellidoPaciente3',
            'phone' => '1239874560',
            'sex' => 'Male',
            'birthdate' => date("Y-m-d H:i:s", strtotime("+1 hours")),

        ]);

    }
}
