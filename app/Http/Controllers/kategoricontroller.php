<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class kategoricontroller extends Controller
{
    //
    public function index()
    {
    $categoriesList = categories::all();


    // cara 2
    return view('kategori', compact('categoriesList'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $category_id)
    {
        $findCategories = categories::find($category_id);
 
 
        $data = ['categories' => $findCategories];
 
 
        return view('edit', $data);
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $category_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $category_id)
    {
        // dd($request->all());
        // categories::find($category_id)->update($request->all());
        // return redirect()->route('kategori.index');
        $findCategori = categories::find($category_id);
        $findCategori->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->route('kategori.index');
    }

   /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $category_id)
    {
        $findCategories = categories::find($category_id);
 
 
        $findCategories->delete();
 
 
        return redirect()->route('kategori.index');
    }
}
