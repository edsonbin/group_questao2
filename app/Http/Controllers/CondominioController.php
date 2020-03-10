<?php

namespace App\Http\Controllers;

use App\Condominio;
use Illuminate\Http\Request;

class CondominioController extends Controller
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
        $condominio = new Condominio;

        $condominio->nome = $request->nome;
        $condominio->endereco = $request->endereco;

        $condominio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function show(Condominio $condominio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function edit(Condominio $condominio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condominio $condominio)
    {
        $condominio->nome = $request->nome;
        $condominio->endereco = $request->endereco;

        $condominio->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condominio $condominio)
    {
        //
    }
}
