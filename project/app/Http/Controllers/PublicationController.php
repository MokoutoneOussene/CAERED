<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\TypePublication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles_id == 2){
            return view('admin.pages.pubs.index', [
                'collection' => Publication::where('users_id', '=', Auth::user()->id)->get()
            ]);
        }

        if (Auth::user()->roles_id == 1){
            return view('admin.pages.pubs.index', [
                'collection' => Publication::all()
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
        $collection = TypePublication::all();
        return View('admin.pages.pubs.create', compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Publication::create($request->all());
        return redirect()->route('gestion_publication.index')->with('status', 'Publication ajoutée avec succes !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = Publication::find($id);
        return View('single_publication', compact('find'));
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
        $pubs = Publication::find($id);
        $pubs->delete();

        return redirect()->route('gestion_publication.index');
    }
}
