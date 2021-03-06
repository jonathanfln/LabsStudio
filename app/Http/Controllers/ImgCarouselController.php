<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarouselCreate;
use App\Http\Requests\StoreCarouselEdit;
use App\Services\ImageResize;
use Illuminate\Http\Request;
use App\ImgCarousel;
use Storage;

class ImgCarouselController extends Controller
{

    public function __construct(ImageResize $imageResize)
    {
        $this->imageResize = $imageResize;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels=ImgCarousel::all()->sortByDesc('created_at');
        return view('adminlte.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarouselCreate $request)
    {
        $carousel = new ImgCarousel;
        $carousel->name = $request->name;
        if($request->image != NULL)
        {$image = [
                "name" => $request->image,
                "disk" => 'imgCarousel',
                "w" => 1920,
                "h" => 1274,
            ];
            $carousel->image = $this->imageResize->imageStore($image);
        }
        $carousel->save(); 

        return redirect()->route('carousel.index');
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
    public function edit(ImgCarousel $carousel)
    {
        return view('adminlte.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCarouselEdit $request, ImgCarousel $carousel)
    {
        // dd($request->name);
        $carousel->name = $request->name;
        if($request->image != NULL)
        {
            if(Storage::disk('imgCarousel')->exists($carousel->image)){
                Storage::disk('imgCarousel')->delete($carousel->image);
            }
            $image = [
                "name" => $request->image,
                "disk" => 'imgCarousel',
                "w" => 1920,
                "h" => 1274,
            ];
            $carousel->image = $this->imageResize->imageStore($image);
        }
        $carousel->save(); 

        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImgCarousel $carousel)
    {
        if($carousel->delete())
        {
            Storage::disk('imgCarousel')->delete($carousel->image);
            
            return redirect()->route('carousel.index');
        };
    }
}
