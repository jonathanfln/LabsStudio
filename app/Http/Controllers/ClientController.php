<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Storage;
use App\Http\Requests\StoreCliCreate;
use App\Http\Requests\StoreCliEdit;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all()->sortByDesc('created_at');
        return view('adminlte.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCliCreate $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->company = $request->company;
        $client->image = $request->image->store('','imgClient');
        $client->save();

        return redirect()->route('clients.show', ['client'=>$client->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('adminlte.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('adminlte.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCliEdit $request, Client $client)
    {
        $client->name = $request->name;
        $client->company = $request->company;
        if($request->image != NULL)
        {
            if(Storage::disk('imgClient')->exists($client->image))
            {
                Storage::disk('imgClient')->delete($client->image);
            }
            $client->image = $request->image->store('','imgClient');
        };
        if($client->save())
        {
            return redirect()->route('clients.show', ['client'=>$client->id]);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if($client->delete())
        {
            Storage::disk('imgClient')->delete($client->image);
            return redirect()->route('clients.index');
        };
    }
}
