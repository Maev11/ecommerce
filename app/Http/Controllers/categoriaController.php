<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoriaRequest;
use App\Models\Categoria;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::all(); 
        return view('categorias.indexCategorias',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoriaRequest $request)
    {
        try {
            $Categoria = Categoria::create([
                'NameCate' => $request['NameCate'],
                'Description' => $request['Description'],
                'Status' => $request['Status'],
            ]);
            return $request->expectsJson()? response()->json( $Categoria->toArray(), 200): "agregado" ;
        } catch (Exception $exception) {
            if ($exception instanceof \Illuminate\Database\QueryException) {    
                if($request->expectsJson()){
                    return response()->json($exception->getMessage(), 501);  
                }
            }  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//muestra la categoria en la landpage
    {
        $Categoria = Categoria::all();
        $nameCategoria = Categoria::find($id);
        return view('categorias.showCategorias',compact('Categoria','nameCategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {
            $categoria= Categoria::findOrFail($id); 
            return Response()->json($categoria);
        } catch (Exception $exception) {
            if ($exception instanceof \Illuminate\Database\QueryException) {    
                if($request->expectsJson()){
                    return response()->json($exception->getMessage(), 501);  
                }
            }  
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
