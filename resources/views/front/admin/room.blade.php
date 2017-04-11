@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <h1>
                    Room
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
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Student</th>
                            <th>Single</th>
                            <th>Double Seater</th>
                            <th>Triple Seater</th>
                            <th>Four Seater</th>
                            <th>Assign</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <form method="post" action="{{route('assignRoom')}}">
                                    <td>{{ $student->name }} <input type="hidden" name="name" value="{{ $student->name }}"></td>
                                    <td><input type="checkbox" {{ $student->hasRoom('single') ? 'checked' : '' }} name="room_1"></td>
                                    <td><input type="checkbox" {{ $student->hasRoom('2 seater') ? 'checked' : '' }} name="room_2"></td>
                                    <td><input type="checkbox" {{ $student->hasRoom('3 seater') ? 'checked' : '' }} name="room_3"></td>
                                    <td><input type="checkbox" {{ $student->hasRoom('4 seater') ? 'checked' : '' }} name="room_4"></td>

                                    {{ csrf_field() }}
                                    <td><button type="submit">Assign Room</button></td>
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