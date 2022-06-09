<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart_detail;
use App\Http\Requests\StoreCart_detailRequest;
use App\Http\Requests\UpdateCart_detailRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

class CartDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_details = Cart_detail::with('product')->orderByDesc('id')->paginate(10);

        return view('admin.cart_details.list', compact('cart_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carts = Cart::all();
        $products = Product::all();
        return view('admin.cart_details.add', compact('products', 'carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCart_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCart_detailRequest $request)
    {
        $total = Product::find($request->product_id)->value('price') * $request->qty
                + Cart::find($request->cart_id)->value('billing_total');
            Cart::where('id', $request->cart_id)->update(['billing_total' => $total]);
        if (Cart_detail::create($request->all())) {
            return redirect()->route('cart_details.index')->with('success', 'Cart detail created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_detail $cart_detail)
    {
        $carts = Cart::all();
        $products = Product::all();
        return view('admin.cart_details.edit', compact('cart_detail','products', 'carts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_detail $cart_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCart_detailRequest  $request
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCart_detailRequest $request, Cart_detail $cart_detail)
    {
        $cart_detail->update($request->all());

        return redirect()->route('cart_details.index')->with('success', 'Cart detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart_detail  $cart_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_detail $cart_detail)
    {
        $total = Cart::find($cart_detail->cart_id)->value('billing_total')
            - Product::find($cart_detail->product_id)->value('price') * $cart_detail->qty;
        Cart::where('id', $cart_detail->cart_id)->update(['billing_total' => $total]);
        $cart_detail->delete();

        return redirect()->route('cart_details.index')->with('success', 'Cart detail deleted successfully');
    }
}
