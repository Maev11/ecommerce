<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Direction;
use App\Http\Controllers\loginController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class registerController extends Controller
{
    //
    public function indexFormUser()
    {
        return view('login.register');
    }

    public function ExistenciaEmail(Request $request)
    {
        try {
            $email = User::where('email','=', $request->email)->first();
            $status = $email? true : false;
            return response()->json($status, 200);
        } catch (\Throwable $th) {
            if ($exception instanceof \Illuminate\Database\QueryException) {    
                if($request->expectsJson()){
                    return response()->json($exception->getMessage(), 501);  
                }
            }  
        }
    }

    public function registerUser(userRequest $request)//usuario creado desde el boton registrarme
    {
        DB::transaction(function() use ($request){
            $role_vendedro = Role::where('Nombre','=','Vendedor')->first();
            $role_comprador = Role::where('Nombre','=','Comprador')->first();

            $user = User::create([
                'name' => $request['name'],
                'apaterno' => $request['apaterno'],
                'fechaNacimiento' => $request['fechaNacimiento'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);

            $direction = Direction::create([
                'colonia' => $request[''],
                'numeroExterior'  => $request[''],
                'numeroInterior'  => $request[''],
                'cp'  => $request[''],
                'calle'  => $request[''],
                'localidad'  => $request[''],
                'estado'  => $request[''],
                'referencias'  => $request[''],
                'user_id' => $user->id,
            ]);

            $user->roles()->attach($role_vendedro);
            $user->roles()->attach($role_comprador);
            Auth::login($user);
            return redirect('/');
        });
    }
}
