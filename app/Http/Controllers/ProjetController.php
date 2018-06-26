<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use Storage;
use App\Http\Requests\StoreProjCreate;
use App\Http\Requests\StoreProjEdit;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=Projet::all()->sortByDesc('created_at');
        return view('adminlte.projet.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte.projet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjCreate $request)
    {
        $projet = new Projet;
        $projet->name = $request->name;
        $projet->content = $request->content;
        $projet->image = $request->image->store('','imgProjet');
        $projet->save();

        return redirect()->route('projets.show', ['projet'=>$projet->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        return view('adminlte.projet.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('adminlte.projet.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjEdit $request, Projet $projet)
    {
        $projet->name = $request->name;
        $projet->content = $request->content;
        if($request->image != NULL)
        {
            if(Storage::disk('imgProjet')->exists($projet->image))
            {
                Storage::disk('imgProjet')->delete($projet->image);
            }
            $projet->name = $request->image->store('','imgProjet');
        }
        $projet->save();

        return redirect()->route('projets.show', ['projet'=>$projet->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        if($projet->delete())
        {
            Storage::disk('imgProjet')->delete($projet->image);
            return redirect()->route('projets.index');
        }
    }
}
