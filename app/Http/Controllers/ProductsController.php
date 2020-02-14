<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'barcode' => 'required | digits_between:1,10',
            'quantity' => 'required | numeric',
            'cost_price' => 'required | between:0,99.99',
            'sell_price' => 'required | between:0,99.99',
            'image' => 'image',
        ]);


        if ( $request->hasFile('image') )
        {
            $imagePath = $request->file('image')->store('products', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
        $data = array_merge($data , $imageArray ?? []);

        Product::create($data);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'barcode' => 'required | digits_between:1,10',
            'quantity' => 'required | numeric',
            'cost_price' => 'required | between:0,99.99',
            'sell_price' => 'required | between:0,99.99',
            'image' => 'image',
        ]);


        if ( $request->hasFile('image') )
        {
            $imagePath = $request->file('image')->store('products', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
        $data = array_merge($data , $imageArray ?? []);

        $product = Product::findOrFail($id);

        $product->update($data);
//        dd($product);

        return redirect()->route('product.show', ['id' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  4id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
