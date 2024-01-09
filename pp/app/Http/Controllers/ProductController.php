<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeProductRequest;
use App\Http\Requests\upateProductRequest;
use App\Models\Category;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['route']='products';
        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['route']='products';
        $data['categories']=Category::select('id' , 'name')->get();
        return view('admin.product.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeProductRequest $request)
    {      
        try {

            $validate = $request->validated();
            $product = new Product();
            $product->category_id = $request->category_id;
            $product->name =  $request->name;
            $product->slug = $request->slug;
            $product->short_description =  $request->short_description;
            $product->description = $request->description;
            $product->status = $request->status ? '1' : '0';
            $product->trend = $request->trend ? '1' : '0';
            $product->price = $request->price;
            $product->selling_price = $request->selling_price;
            $product->qty = $request->qty;
            $product->tax = $request->tax;
            $product->meta_title = $request->meta_title;
            $product->meta_description =$request->meta_description;
            $product->meta_keywords =$request->meta_keywords;
            
            if (!empty ($request->file('image'))) {
                if(\File::exists(public_path('productImage/').$product->image)){
                    \File::delete(public_path('productImage/').$product->image);
                }
                $imageName = uniqid() . $request->file('image')->getClientOriginalName();
    
                $request->file('image')->move(public_path('productImage'), $imageName);
                $product->image= $imageName;
            }
            $product->save();

            return redirect()->route('products.index')->with('success','success_save');

        } catch (\Exception $e) {
            return redirect()->back()->with(['error_catch' => $e->getMessage()]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
