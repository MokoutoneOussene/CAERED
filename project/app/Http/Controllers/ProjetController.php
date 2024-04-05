<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles_id == 2){
            return view('admin.pages.projet.index', [
                'collection' => Projet::where('users_id', '=', Auth::user()->id)->get()
            ]);
        }

        if (Auth::user()->roles_id == 1){
            return view('admin.pages.projet.index', [
                'collection' => Projet::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.pages.projet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Projet::create([
            'users_id' => $request->users_id,
            'titre' => $request->titre,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'lieu' => $request->lieu,
            'inst_finance' => $request->inst_finance,
            'img_avant' => Storage::disk('public')->put('photo', $request->img_avant),
            'img_apres' => Storage::disk('public')->put('photo', $request->img_apres),
            'resultat' => $request->resultat,
            'atelier_vulgarisation' => $request->atelier_vulgarisation,
            'observation' => $request->observation,
        ]);
        return redirect()->route('gestion_projets.index')->with('status', 'Projet ajoutée avec succes !');
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
        $proj = Projet::find($id);
        $proj->delete();

        return redirect()->route('gestion_projets.index');
    }
}
