<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tax;
class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $impuestos = Tax::all();
        return(view('admin.tax.index',['impuestos'=> $impuestos]));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|max:100|string|unique:categories',
            'value' => 'required'
        ]);

        $impuesto = new Tax();
        $impuesto->title = $request->title ;
        $impuesto->value = $request->value ;
        $impuesto->save();
        
        return(redirect()->route('tax.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tax::destroy($id);
        return(redirect()->route('tax.index'));
    }
}
