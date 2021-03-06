<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCreate;
use App\Http\Requests\StoreUserEdit;
use App\Services\ImageResize;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Storage;

class UserController extends Controller
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
        $users = User::all();
        return view('adminlte.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('adminlte.user.create', compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCreate $request)
    {
        $user = new User;
        $user->name = $request->name;
        if($request->image != NULL)
        {
            $image = [
                "name" => $request->image,
                "disk" => 'imgUser',
                "w" => 360,
                "h" => 448,
            ];
            $user->image = $this->imageResize->imageStore($image);
        }
        $user->email = $request->email;
        $user->roles_id = $request->roles_id;
        $user->password = bcrypt($request->password);
        if($request->job != NULL)
        {
            $user->job = $request->job;
        }
        if($user->save())
        {
            return redirect()->route('users.show', ['user'=>$user->id]);
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('adminlte.user.show', compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('adminlte.user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserEdit $request, User $user)
    {
        $user->name = $request->name;
        if($request->image != NULL)
        {
            if(Storage::disk('imgUser')->exists($user->image))
            {
                Storage::disk('imgUser')->delete($user->image);
            }
            $image = [
                "name" => $request->image,
                "disk" => 'imgUser',
                "w" => 360,
                "h" => 448,
            ];
            $user->image = $this->imageResize->imageStore($image);
        }
        if($request->email != $user->email)
        {
            $user->email = $request->email;
        }
        $user->roles_id = $request->roles_id;
        if($request->password != NULL)
        {
            $user->password = bcrypt($request->password);
        }
        $user->job = $request->job;
        if($user->save())
        {
            return redirect()->route('users.show', ['user'=>$user->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->delete())
        {
                Storage::disk('imgUser')->delete($user->image);

            return redirect()->routet('users.index');
        }
    }
}
