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
                <div>
                    @foreach ($errors -> all() as $error)
                        {{ $error }}
                    @endforeach
                </div>

                <a href="{{route('register_room')}}">
                    <button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Register Student</button>
                </a>
            </div>

        </section>
        <div class="container" style="width: 100%">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                    <div style="padding-top: 3%">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table table-striped table-striped">
                            <thead>
                            <tr>
                                <th>Room Type</th>
                                <th>Seats</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($rooms))
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->type}}</td>
                                    <td>{{$room->seats}}</td>
                                    <td><a href="{{ route('edit_room',$room->room_id) }}">Edit</a> | <a href="" data-toggle="modal" data-target="#{{$room->room_id}}">Delete</a> </td>
                                </tr>
                                <div class="modal fade" id="{{$room->room_id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: yellow">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Warning</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure ??</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <a href="{{ route('delete-room', $room->room_id) }}"> <button class="btn btn-danger">Yes</button></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop