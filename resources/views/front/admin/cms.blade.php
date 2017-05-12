@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <h1>
                        Dashboard (Contents)
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>


            </div>
            <div class="container" style="width: 100%">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content">

                            <table class="table table-striped table-bordered dt-responsive nowrap" id="booking-table" >
                                <thead>
                                <tr>

                                    <th>Booking_id</th>
                                    <th>Room</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>


                                @if(!$bookings == null)
                                    @foreach( $bookings as $booking )
                                        <tr>
                                            <td>{{ $booking->id }}</td>
                                            <td>{{ $booking->type }}</td>
                                            <td>{{$booking->name}}</td>
                                            <td>{{ $booking->contact }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td>{{ $booking->message }}</td>
                                            <td>
                                                <a href="#"  data-toggle="modal" data-target="#bookingdelete"> <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="bookingdelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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
                                                        <a href="{{ route('deleteBooking',[$booking->id, $booking->vaccancy_id] ) }}"> <button class="btn btn-danger">Yes</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            {{--{!! $bookings -> links() !!}--}}
                                    <!-- Small modal -->


                            @else
                                <tr>
                                    <td> NO BOOKINGS !!</td>
                                </tr>
                                </tbody>
                                </table>
                            @endif

                        </div>

                    </div>
                </div>
            </div>

        </section>





    </div>
    <!-- /.content-wrapper -->
    <script>
        $(document).ready(function(){
            $('#booking-table').dataTable();
        });
    </script>

@stop
