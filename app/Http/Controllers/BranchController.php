<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sucursales = Branch::all();
        return(view('admin.branch.index',['sucursales'=>$sucursales]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return(view('admin.branch.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'title' => 'required|max:50|string',
            'short_description' => 'max:200|string',
            'contact_person' =>'required|max:50|string',
            'phone' => 'required|max:33|string',
            'address' => 'required|max:100|string'
        ]);

        $sucursal = new Branch();
        $sucursal->title = $request->title ;
        $sucursal->short_description = $request->short_description;
        $sucursal->contact_person = $request->contact_person;
        $sucursal->phone = $request->phone;
        $sucursal->address = $request->address;
        $sucursal->save();
        
        return(redirect()->route('branch.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sucursal = Branch::findOrFail($id);
      
        return(view('admin.branch.show',['sucursal'=>$sucursal]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sucursal = Branch::findOrFail($id);
      
         return(view('admin.branch.edit',['sucursal'=>$sucursal]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         $request->validate([
            'title' => 'required|max:50|string',
            'short_description' => 'max:200|string',
            'contact_person' =>'required|max:50|string',
            'phone' => 'required|max:33|string',
            'address' => 'required|max:100|string'
        ]);

        $sucursal = Branch::find($id);

        $sucursal->title = $request->title ;
        $sucursal->short_description = $request->short_description;
        $sucursal->contact_person = $request->contact_person;
        $sucursal->phone = $request->phone;
        $sucursal->address = $request->address;
        $sucursal->save();

        return(redirect()->route('branch.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Branch::destroy($id);
        return(redirect()->route('branch.index'));
    }
}
