<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Branch;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return(view('admin.usuarios.index',['usuarios'=>$usuarios]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return(view('admin.usuarios.create'));

        $sucursales = Branch::orderBy('title', 'asc')->get();
        $roles = Role::orderBy('name','asc')->get();

        return view('admin.usuarios.create', ['sucursales' => $sucursales,'roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'name' => 'required|max:100|string',
            'email' => 'required|unique:users|string|email',
            'branch' => 'required|int|max:11',
            'role' => 'required|int|max:10',
            'password' =>'required|confirmed|string|min:8'
        ]);

        $usuario = new User();
        $usuario->name = $request->name ;
        $usuario->email = $request->email;
        $usuario->branch_id = $request->branch;
        $usuario->role_id = $request->role;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        
        return(redirect()->route('usuarios.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $usuario = User::findOrFail($id);
      
        return(view('admin.usuarios.show',['usuario'=>$usuario]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $sucursales = Branch::orderBy('title', 'asc')->get();
        $roles = Role::orderBy('name','asc')->get();

        return view('admin.usuarios.edit', ['usuario'=>$usuario,'sucursales' => $sucursales,'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100|string',
            'email' => 'required|string|email',
            'branch' => 'int|max:11',
            'role' => 'int|max:10',
            'password' =>'required|confirmed|string|min:8'
        ]);
        $usuario = User::find($id);

        $usuario->name = $request->name ;
        $usuario->email = $request->email;
        $usuario->branch_id = $request->branch;
        $usuario->role_id = $request->role;
        $usuario->password = Hash::make($request->password);

        $usuario->save();

        return(redirect()->route('usuarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
        return(redirect()->route('usuarios.index'));
    }
}
