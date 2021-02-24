<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/tutores/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examen.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        DB::Transaction(function() {
            $i = request();

            $id_emp = DB::table('tutores')->insertGetId(
                    ['empresa' => $i['empresa'],
                        'tipoDocumento' => $i['tipoDocumento'],
                        'documentoIdentidad' => $i['documentoIdentidad'],
                        'name' => $i['name'],
                        'apellido1' => $i['apellido1'],
                        'apellido2' => $i['apellido2'],
                        'pais' => $i['pais'],
                        'provincia' => $i['provincia'],
                        'municipio' => $i['municipio'],
                        'estado' => $i['estado'],
                        'telefono' => $i['telefono'],
                        'email' => $i['email'],
                        ]);
        });

        return "La transacción se realizó con éxito";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
