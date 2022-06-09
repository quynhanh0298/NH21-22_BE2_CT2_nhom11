@extends('admin.master')

@section('content')
<x-app-layout>
    @include('admin.cart_details.cart_details')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <form action="{{ route('cart_details.update',$cart_detail) }}" method="POST">
                                        @csrf

                                        @method('PUT')
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 form-control-label">Cart_id</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control selectpicker" name="cart_id" id="select-country" data-live-search="true">
                                                        @foreach($carts as $cart)
                                                        <option value="{{ $cart->id }}" data-tokens="{{ $cart->id }}" {{ $cart_detail->cart_id == $cart->id ? 'selected' : '' }}>{{ $cart->id }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 form-control-label">Product</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control selectpicker" name="product_id" id="select-country" data-live-search="true">
                                                        @foreach($products as $product)
                                                        <option value="{{ $product -> id }}" data-tokens="{{ $product -> name }}" {{ $cart_detail->product_id == $product->id ? 'selected' : '' }}>{{ $product -> name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Qty</label>
                                                <input type="number" name="qty" value="{{ $cart_detail->qty }}" class="form-control" placeholder="Input Product's qty">
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="color:black">Update</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection('content')