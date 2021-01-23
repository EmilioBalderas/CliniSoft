<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Auth;

class userController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function session(Request $request){
        $credentials = $this->validate(request(), [
            'name' => 'required|string',
            'password' => 'required|string'
            ]);

        if(Auth::attempt($credentials)){
            $user  = DB::table('users')->where('name', $credentials['name'])->First();
            $usertype = $user->usertype;


            if($usertype == "Dentista")
            {
                return redirect('dentists');
            }

            if($usertype == "Paciente")
            {
                Auth::logout();
                return redirect('users/login')->with('error', 'Tus credenciales no coinciden con ninguna en la base de datos');
            }
        }

        return redirect('users/login')->with('error', 'Tus credenciales no coinciden con ninguna en la base de datos');
    }


    public function delete(){
        $user = Auth::user();
        $id = $user->id;
        
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('users/login')->with('error', 'Usuario eliminado');
    }

}
