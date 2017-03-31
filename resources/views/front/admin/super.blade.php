@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <h1>
                    Dashboard (Contents)
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <div class="container" style="width: 100%">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table>
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Admin</th>
                            <th>Super</th>
                            <th>Student</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <form method="post" action="{{route('assignRole')}}">
                                <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                                <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                                <td><input type="checkbox" {{ $user->hasRole('Super') ? 'checked' : '' }} name="role_super"></td>
                                <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                                {{ csrf_field() }}
                                <td><button type="submit">Assign Roles</button></td>
                            </form>

                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>





    </div>
    <!-- /.content-wrapper -->








@stop