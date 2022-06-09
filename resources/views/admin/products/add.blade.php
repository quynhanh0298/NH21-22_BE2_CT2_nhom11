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
                                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="menu">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Input Product's Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Manufactures</label>
                                                <select class="form-control" name="manu_id">
                                                    @foreach($manus as $manu)
                                                    <option value="{{ $manu->id }}">{{ $manu->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Protypes</label>
                                                <select class="form-control" name="type_id">
                                                    @foreach($protypes as $protype)
                                                    <option value="{{ $protype->id }}">{{ $protype->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="menu">Price</label>
                                                        <input type="number" name="price" value="Input Price" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="menu">Sale</label>
                                                        <input type="number" name="sale" value="Input Sale" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPro_image">Image</label>
                                                <input type="file" name="file_upload" class="form-control" placeholder="image">
                                            </div>

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Feature</label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" value="1" type="radio" id="active" name="feature" checked="">
                                                    <label for="active" class="custom-control-label">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="feature">
                                                    <label for="no_active" class="custom-control-label">No</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="color:black">Add new</button>
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