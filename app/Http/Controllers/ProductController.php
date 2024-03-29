<?php

namespace App\Http\Controllers;

use App\Product;
use App\Unit;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $categories = Category::all();

        return view('products.create',['units' => $units, 'categories' => $categories]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'A :attribute mező megadása kötelező.',
        ];

        Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'amount' => 'required',
            'barcode' => 'required|max:13',
            'unit_id' => 'required|integer',
        ],$messages)->validate();

		$request->merge([
          'id' => Str::orderedUuid(),
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $units = Unit::all();
        $categories = Category::all();

        //return view('products.create',['units' => $units, 'categories' => $categories]);

        return view('products.edit',['product' => $product,'units' => $units, 'categories' => $categories]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $messages = [
            'name.required' => 'A :attribute mező megadása kötelező.',
        ];

        Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'amount' => 'required',
            'barcode' => 'required|max:13',
            'unit_id' => 'required|integer',
        ],$messages)->validate();

        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
