<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tax;
use App\Models\Setting;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Product::all();
        return view('admin.product.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Category::all();
        $impuestos = Tax::all();
        $prefijo = Setting::where('id',6)->select('option_value')->get();
        //$codigo_producto =Product::latest()->first()->id+1;
        return view('admin.product.create',['categorias'=>$categorias, 'impuestos'=>$impuestos,'prefijo' => $prefijo[0]->option_value]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        Product::destroy($id);
        return(redirect()->route('product.index'));
    }
}
