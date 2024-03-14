<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return(view('admin.role.index',['roles'=>$roles]));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|string|unique:roles',
        ]);

        $rol = new Role();
        $rol->name = $request->name ;
        $rol->save();
        
        return(redirect()->route('role.index'));
    }

    
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Role::destroy($id);
        return(redirect()->route('role.index'));
    }
}
