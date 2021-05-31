<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class appController extends Controller
{
    //
    public function index()
    {   
        $Categoria = Categoria::all();
        return view('landPage',compact('Categoria'));
    }

    public function getConfig()
    {   
        $usuario = Auth::user();
        return view('configuraciones.configuracionUsuario',compact('usuario')); 
    }

    public function Buscar(Request $request)
    {
    	$Buscar = $request->get('Buscar');
    	$querys = Producto::where('Nombre','LIKE', '%'.$Buscar.'%')->get();
    	$data = [];
    	foreach ($querys as $query) {
    		$data[] =[
    			'label' => $query->Nombre,
                'id' => $query->id,
    		];
    	}
    	return $data;
    }
}
