<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DentistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dentista_1',
            'password' => bcrypt('Dentista_1'),
            'usertype' => 'Dentista',
            'dentistName' => 'NombreDentista ApellidoDentista',
            'mail' => 'mailDerntista@dentista.com',
            'speciality' => 'odontologo',
            'clinic' => 'Clinica 1',
            'services' => 'protesis,ortodoncia,endodoncia,cirugía maxilofacial,implantología'
        ]);

        DB::table('users')->insert([
            'name' => 'Dentista_2',
            'password' => bcrypt('Dentista_2'),
            'usertype' => 'Dentista',
            'dentistName' => 'NombreDentista2 ApellidoDentista2',
            'mail' => 'mailDerntista@dentista2.com',
            'speciality' => 'Protesista',
            'clinic' => 'Clinica 2',
            'services' => 'protesis,ortodoncia,endodoncia,implantología'
        ]);

        DB::table('users')->insert([
            'name' => 'Dentista_3',
            'password' => bcrypt('Dentista_3'),
            'usertype' => 'Dentista',
            'dentistName' => 'NombreDentista3 ApellidoDentista3',
            'mail' => 'mailDerntista@dentista3.com',
            'speciality' => 'odontologo',
            'clinic' => 'Clinica 3',
            'services' => 'protesis'
        ]);



    }
}
