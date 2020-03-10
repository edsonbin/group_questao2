<?php

namespace App\Http\Controllers;

use App\Morador;
use App\Unidade;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $morador = new Morador;
        $morador->nome = $request->nome;
        $morador->sobrenome = $request->sobrenome;

        $unidade = Unidade::findOrFail($request->idUnidade);

        $$unidade->morador()->save($morador);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function show(Morador $morador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function edit(Morador $morador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Morador $morador)
    {
        $morador->nome = $request->nome;
        $morador->sobrenome = $request->sobrenome;

        $morador->save();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Morador $morador)
    {
        //
    }
}
