@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">

        <div>
            @foreach ($errors -> all() as $error)
                {{ $error }}
            @endforeach
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <h1>
                    Students
                    <small>Control panel</small>
                </h1>

                <a href="{{route('register_std')}}">
                    <button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Register Student</button>
                </a>
            </div>

        </section>
        <div class="container-fluid" style="">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

            <div>
                <table class="table table-striped table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>School</th>
                        <th>Father's Name</th>
                        <th>Father's Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->contact}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->school}}</td>
                            <td>{{$student->father_name}}</td>
                            <td>{{$student->father_contact}}</td>
                            <td><img height="200px" width="200px" class="img img-bordered-sm" src="{{asset('storage/')}}/{{$student->profile_pic}}"></td>
                            <td><a href="{{ route('edit_std', $student->std_id) }}"><i class="glyphicon glyphicon-edit"></i></a> </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            </div>
</div>
    </div>
    </div>
@stop