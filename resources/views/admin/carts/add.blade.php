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
                                    <form action="{{ route('carts.store') }}" method="POST">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 form-control-label">User ID</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control selectpicker" name="user_id" id="select-country" data-live-search="true">
                                                        @foreach($users as $user)
                                                        <option value="{{ $user -> id }}" data-tokens="{{ $user -> id }}">{{ $user -> name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Billing Email</label>
                                                <input type="email" name="billing_email" class="form-control" placeholder="Input Billing Email" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Billing Name</label>
                                                <input type="text" name="billing_name" class="form-control" placeholder="Input Billing Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Billing Address</label>
                                                <input type="text" name="billing_address" class="form-control" placeholder="Input Billing Address" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Billing Phone</label>
                                                <input type="text" name="billing_phone" class="form-control" placeholder="Input Billing Phone" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Billing Total</label>
                                                <input type="text" name="billing_total" class="form-control" value="0">
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="color:black">Add new</button>
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