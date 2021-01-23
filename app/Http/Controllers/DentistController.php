<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class dentistController extends Controller
{

    public function index()
    {
        $pacientes  = DB::table('users')->where('usertype', 'Paciente')->orderBy('patientName', 'asc')->get();
        return view('dentist.index')->with('pacientes', $pacientes);
    }

    public function create()
    {
        return view("dentist.createDentist");
    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'unique:users,name',
        ]);

        $name = $request->name;
        $dentistName = $request->dentistName;
        $password = bcrypt($request->password);
        $mail = $request->mail;
        $clinic = $request->clinic;
        $speciality = $request->speciality;
        $services = $request->services;

        DB::table('users')->insert(
            ['name' => $name, 'password' => $password, 'usertype' => 'Dentista','dentistName'=>$dentistName,'speciality' => $speciality, 'mail' => $mail, 'clinic' => $clinic, 'services' => $services]
        );
        return redirect()->back()->with('message', 'Usuario creado con exito');
    }

}
