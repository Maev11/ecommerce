<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\loginRequest;
use Illuminate\Routing\Redirector;
use App\Models\User;
use App\Models\Role;


class loginController extends Controller
{
    
    //
    public function index()
    {
        return view('login.login');
    }
    
    public function login(loginRequest $request,Redirector $redirect)
    {
        $credenciales = $request->only('email','password');
        $remember = $request->filled('remember');//convierto el valor del check-box en true or false
        
        if(Auth::attempt($credenciales,$remember)){//validamos las credenciales
            $request->session()->regenerate();//regeneramos el token para evitar una vulnerabilidad
            return $this->redirectPath();
        }
        throw ValidationException::withMessages([
            'db' => __('auth.failed')
        ]);
    }

    public function logout(Request $request, Redirector $redirect)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $redirect->to('/');
    }

    public function redirectPath()
    {
        $user = Auth::user();
        $userb = User::with('roles')->where('id', $user->id)->first();
        $role= $userb->roles->first()->Nombre;

        switch ($role) {
            case 'Supervisor':
                return redirect('cuenta/Supervisor');
                break;
            case 'Encargado':
                return redirect('cuenta/Encargado');
                break;
            case 'Comprador':
                return redirect('cuenta/Vendedor');
                break;
            case 'Contador':
                return redirect('cuenta/Contador');
                break;
            case 'Vendedor':
                return redirect('cuenta/Vendedor');
                break;
            default:
                return redirect('login');
                break;
        }
    }
}
