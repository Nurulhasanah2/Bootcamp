<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productcontroller extends Controller
{
    //
    public function index()
    {
    $productList = products::all();


    // cara 2
    return view('produk', compact('productList'));
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
    public function show(string $product_id)
    {
        $findProduct = products::find($product_id);
 
 
        $data = ['products' => $findProduct];
 
 
        return view('editproduk', $data);
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $product_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product_id)
    {
        // dd($request->all());
        // categories::find($category_id)->update($request->all());
        // return redirect()->route('kategori.index');
        $findProduct = products::find($product_id);
        $findProduct->update([
            'name' => $request->name,
            'description' => $request->description,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'weight'=>$request->weight,
            'img_url'=>$request->img_url,
        ]);
        return redirect()->route('produk.index');
    }

   /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product_id)
    {
        $findProducts = products::find($product_id);
 
 
        $findProducts->delete();
 
 
        return redirect()->route('produk.index');
    }
}
