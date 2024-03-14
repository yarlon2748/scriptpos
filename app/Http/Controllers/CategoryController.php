<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Category::all();
        return(view('admin.category.index',['categorias'=> $categorias]));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|max:100|string|unique:categories',
        ]);

        $categoria = new Category();
        $categoria->title = $request->title ;
        $categoria->save();
        
        return(redirect()->route('category.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return(redirect()->route('category.index'));
    }
}
