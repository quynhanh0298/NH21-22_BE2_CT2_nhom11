<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Services\Product\ProductAdminService;
use App\Models\Manufacture;
use App\Models\Protype;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('manufacture', 'protype')->orderByDesc('id')->paginate(10);
        $manus = Manufacture::all();
        $protypes = Protype::all();

        return view('admin.products.list', compact('products', 'manus', 'protypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manus = Manufacture::all();
        $protypes = Protype::all();
        return view('admin.products.add', compact('manus', 'protypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('img'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        if (Product::create($request->all())) {
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $manus = Manufacture::all();
        $protypes = Protype::all();
        return view('admin.products.edit',compact('product','manus', 'protypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

       return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
