<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Icon;
use App\Http\Requests\StoreServCreate;
use App\Http\Requests\StoreServEdit;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all()->sortByDesc('created_at');
        return view('adminlte.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::paginate(10);
        return view('adminlte.service.create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServCreate $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->content = $request->content;
        $service->image = $request->image;
        $service->save();

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('adminlte.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icons = Icon::paginate(10);
        return view('adminlte.service.edit',compact('service','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreServEdit $request, Service $service)
    {
        $service->name = $request->name;
        $service->content = $request->content;
        $service->image = $request->image;
        $service->save();
        
        return redirect()->route('services.show', ['service'=>$service->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->delete())
        {
            return redirect()->route('services.index');
        }
    }
}
