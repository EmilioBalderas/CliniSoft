<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class PatientController extends Controller
{

    public function index()
    {
        return view('patient.showServices');
    }

    public function create()
    {
        return view('dentist.createPatient');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'unique:users,name',
        ]);

        $username = $request->username;
        $name = $request->name;
        $password = bcrypt($request->password);
        $phone = $request->phone;
        $sex = $request->sex;
        $birthdate = $request->birthdate;

        DB::table('users')->insert(
            ['name' => $username, 'password' => $password, 'usertype' => 'Paciente','phone' => $phone, 'sex' => $sex, 'birthdate' => $birthdate, 'patientName' => $name]
        );
        return redirect('dentists');
    }


    public function delete($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('dentists');
    }

}
