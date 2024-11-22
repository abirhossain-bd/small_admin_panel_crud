@extends('layouts.app')

@section('content')
    <div class="row">

        <div style="margin-left: 20px">
            <a class="btn btn-primary" href="{{ route('user.create') }}">Add User</a>
        </div>

        <div class="col-md-12 col-sm-12  ">

            <div class="x_panel">
                <div class="x_title">
                    <h2>Users table <small>You can configure the table</small></h2>


                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key=> $user)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('user.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('user.delete', $user->id) }}"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
@endsection
