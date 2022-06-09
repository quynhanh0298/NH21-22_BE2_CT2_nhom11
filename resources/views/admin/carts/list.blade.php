@extends('admin.master')

@section('content')
<x-app-layout>
    @include('admin.carts.carts')


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
                                                <th>User_id</th>
                                                <th>Billing email</th>
                                                <th>Billing name</th>
                                                <th>Billing phone</th>
                                                <th>Billing address</th>
                                                <th>Billing total</th>
                                                <th style="width: 50px">&nbsp;</th>
                                                <th style="width: 50px">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($carts as $cart)
                                            <tr>
                                                <td>{{ $cart->id }}</td>
                                                <td>{{ $cart->user_id }}</td>
                                                <td>{{ $cart->billing_email }}</td>
                                                <td>{{ $cart->billing_name }}</td>
                                                <td>{{ $cart->billing_address }}</td>
                                                <td>{{ $cart->billing_phone }}</td>
                                                <td>{{ $cart->billing_total }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('carts.show',$cart->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('carts.destroy',$cart->id) }}" method="POST">

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm" style="color:white; background-color: #dc3546"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="card-footer clearfix">
                                        {!! $carts->links() !!}
                                    </div>

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