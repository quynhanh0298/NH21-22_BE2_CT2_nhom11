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
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 50px">ID</th>
                                                <th>Name</th>
                                                <th style="width: 50px">&nbsp;</th>
                                                <th style="width: 50px">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($protypes as $protype)
                                            <tr>
                                                <td>{{ $protype->id }}</td>
                                                <td>{{ $protype->name }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('protypes.show',$protype->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('protypes.destroy',$protype->id) }}" method="POST">

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm" style="color:white; background-color: #dc3546"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <div class="mt-4">
                                    {{ $protypes->links() }}
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