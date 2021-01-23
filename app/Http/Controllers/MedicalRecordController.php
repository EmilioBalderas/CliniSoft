<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class MedicalRecordController extends Controller
{
    public function create($id)
    {
        $pacientes  = DB::table('users')->where('id', '=', $id)->get();
        return view('medicalRecord.createMedicalRecord')->with('pacientes', $pacientes);
    }

    public function showPatientMedicalRecords($id)
    {
        $paciente = DB::table('users')->where('name','=', $id)->first();
        $expedientes  = DB::table('expedient')->where('patientName', $paciente->patientName)->get();
        return view('medicalRecord.showMedicalRecords')->with('expedientes', $expedientes);
    }

    public function edit($id)
    {
        $expediente  = DB::table('expedient')->where('id', '=', $id)->get();
        return view('medicalRecord.updateMedicalRecord')->with('expedientes', $expediente);
    }

    public function update(Request $request, $id)
    {

        $doctor = $request->doctor;
        $patient = $request->patient;
        $phone = $request->phone;
        $sex = $request->sex;
        $birthdate = $request->birthdate;
        $alergies = $request->alergies;
        $sickness = $request->sickness;
        $observaciones = $request->observaciones;
        $plan = $request->plan;
        $creationDate = $request->creationDate;

        DB::table('expedient')
            ->where('id', $id)
            ->update(['dentistName' => $doctor, 'patientName' => $patient,'phone' => $phone, 'sex' => $sex,'phone' => $phone,
                'birthdate' => $birthdate,'alergies' => $alergies, 'sickness' => $sickness,'observaciones' => $observaciones,'plan' => $plan, 'creationDate' =>$creationDate]);
        return redirect('dentists');

    }

    public function store(Request $request)
    {
        $doctor = $request->doctor;
        $patient = $request->patient;
        $phone = $request->phone;
        $sex = $request->sex;
        $birthdate = $request->birthdate;
        $alergies = $request->alergies;
        $sickness = $request->sickness;
        $observaciones = $request->observaciones;
        $plan = $request->plan;
        $creationDate = now();


        DB::table('expedient')->insert(
            ['dentistName' => $doctor, 'patientName' => $patient,'phone' => $phone, 'sex' => $sex,'phone' => $phone,
                'birthdate' => $birthdate,'alergies' => $alergies, 'sickness' => $sickness,'observaciones' => $observaciones,'plan' => $plan, 'creationDate' =>$creationDate]
        );
        return redirect('dentists')->with('message', 'Expediente creado con exito');
    }

    public function show($id)
    {
        $expediente  = DB::table('expedient')->where('id', '=', $id)->get();
        return view('medicalRecord.showMedicalRecordDetails')->with('expedientes', $expediente);
    }

    public function delete($id)
    {
        DB::table('expedient')->where([
            ['id', '=', $id]])->delete();
        return redirect()->back();
    }

}
