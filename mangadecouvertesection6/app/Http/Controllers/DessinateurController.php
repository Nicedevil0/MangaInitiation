<?php

namespace App\Http\Controllers;

use App\Models\Dessinateur;
use Illuminate\Http\Request;

class DessinateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dessinateurs = Dessinateurs::all();
        return view('index',compact('dessinateurs'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dessinateur  $dessinateur
     * @return \Illuminate\Http\Response
     */
    public function show(Dessinateur $dessinateur)
    {
        return view('dessinateur',compact('dessinateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dessinateur  $dessinateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Dessinateur $dessinateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dessinateur  $dessinateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dessinateur $dessinateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dessinateur  $dessinateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dessinateur $dessinateur)
    {
        $dessinateur->delete();
        return back()->with('info','Le dessinateur a bien été supprimé de la base de données');
    }
}
