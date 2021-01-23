<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $doctors  = DB::table('users')->where('usertype', 'Dentista')->orderBy('dentistName', 'asc')->get();
        return view('patient.showDentists')->with('doctors', $doctors);
    }

    public function show()
    {
        $user = Auth::user();
        $appointments = DB::table('appointment')->where([
            ['DoctorID', '=', $user->id],
            ['patientName', '<>', null],
        ])->get();

        return view('dentist.showAppointments')->with('appointments', $appointments);
    }

    public function create($id)
    {
        $doctor  = DB::table('users')->where('id', '=', $id)->first();
        $pacientes  = DB::table('users')->where('usertype', 'Paciente')->get();
        $appointments = DB::table('appointment')->where([
            ['DoctorID', '=', $id],
            ['PatientName', '=', null],
        ])->get();
        $data = [$appointments,$doctor,$pacientes];
        return view('patient.createAppointment')->with('data', $data);
    }

    public function store(Request $request)
    {
        $doctorID = $request->doctorID;
        $patientName = $request->patientName;
        $shedule = $request->shedule;
        $service = $request->service;


        DB::table('appointment')->where([
            ['DoctorID', '=', $doctorID],
            ['hour', '=', $shedule],
        ])->delete();

        DB::table('appointment')->insert(
            ['DoctorID' => $doctorID, 'patientName' => $patientName, 'hour' => $shedule, 'service' => $service]
        );

        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('appointment')->where('id', '=', $id)->delete();
        return redirect('appointments/show');
    }

}
