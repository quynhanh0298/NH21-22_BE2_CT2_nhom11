@extends('admin.master')

@section('content')
<x-app-layout>
    @include('admin.protypes.protypes')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <form action="{{ route('protypes.update',$protype) }}" method="POST">
                                        @csrf

                                        @method('PUT')
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="manu">Name</label>
                                                <input type="text" name="name" value="{{ $protype->name }}" class="form-control" placeholder="Input Protype Name" required>
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