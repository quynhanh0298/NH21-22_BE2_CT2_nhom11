@extends('admin.master')

@section('content')
<x-app-layout>
    @include('admin.products.products')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <form action="{{ route('products.update',$product) }}" method="POST">
                                        @csrf

                                        @method('PUT')
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="menu">Name</label>
                                                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Input Product's Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Manufactures</label>
                                                <select class="form-control" name="manu_id">
                                                    @foreach($manus as $manu)
                                                    <option value="{{ $manu->id }}" {{ $product->manu_id == $manu->id ? 'selected' : '' }}>{{ $manu->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Protypes</label>
                                                <select class="form-control" name="type_id">
                                                    @foreach($protypes as $protype)
                                                    <option value="{{ $protype->id }}" {{ $product->type_id == $protype->id ? 'selected' : '' }}>{{ $protype->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="menu">Price</label>
                                                        <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="menu">Sale</label>
                                                        <input type="number" name="sale" value="{{ $product->sale }}" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPro_image">Image</label>
                                                <input type="file" name="file_upload" class="form-control" placeholder="image">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" value="{{ $product->description }}" class="form-control" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Feature</label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" value="1" type="radio" id="active" name="feature" {{ $product->feature == 1 ? ' checked=""' : '' }}>
                                                    <label for="active" class="custom-control-label">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="feature" {{ $product->feature == 0 ? ' checked=""' : '' }}>
                                                    <label for="no_active" class="custom-control-label">No</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="color:black">Update</button>
                                        </div>
                                        @csrf
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