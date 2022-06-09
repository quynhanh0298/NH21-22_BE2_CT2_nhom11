@extends('admin.master')

@section('content')
<x-app-layout>
    @include('admin.users.users')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <form action="{{ route('users.store') }}" method="POST">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Role</label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" value="1" type="radio" id="active" name="role_id" checked="">
                                                    <label for="active" class="custom-control-label">User</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" value="2" type="radio" id="no_active" name="role_id">
                                                    <label for="no_active" class="custom-control-label">Admin</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="menu">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Input Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="menu">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Input Email" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Input Password" required onkeyup='check();'>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Confirm Password</label>
                                                <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password" required onkeyup='check();'>
                                                <span id='message'></span>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" style="color:black">Add new</button>
                                        </div>
                                        @csrf
                                    </form>
                                    <script>
                                        var check = function() {
                                            if (document.getElementById('password').value ==
                                                document.getElementById('confirm_password').value) {
                                                document.getElementById('message').style.color = 'green';
                                                document.getElementById('message').innerHTML = 'matching';
                                            } else {
                                                document.getElementById('message').style.color = 'red';
                                                document.getElementById('message').innerHTML = 'not matching';
                                            }
                                        }
                                    </script>
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