<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'service' => null,

        ]);

        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+2 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+3 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+4 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+5 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+6 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '1',
            'hour' => date("Y-m-d H:i:s", strtotime("+7 hours")),
            'service' => null,

        ]);
        //------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------
        //_--------------------------------------------------------------------------------------

        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'service' => null,

        ]);

        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+2 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+3 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+4 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+5 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+6 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '2',
            'hour' => date("Y-m-d H:i:s", strtotime("+7 hours")),
            'service' => null,

        ]);

        //------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------
        //_--------------------------------------------------------------------------------------

        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+1 hours")),
            'service' => null,

        ]);

        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+2 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+3 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+4 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+5 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+6 hours")),
            'service' => null,

        ]);
        DB::table('appointment')->insert([
            'PatientName' => null,
            'doctorID' => '3',
            'hour' => date("Y-m-d H:i:s", strtotime("+7 hours")),
            'service' => null,

        ]);


    }
}
