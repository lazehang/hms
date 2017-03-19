@extends('layouts.admin')
@section('content')



        <!-- Content Wrapper. Contains page content -->
<div id="page-content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="container">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
</div>
    </section>
    <div class="container">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Vaccancy</h3>
                </div><!-- /.box-header -->
                <p class="text-danger">
                    @foreach ($errors -> all() as $error)
                        {{ $error }}
                    @endforeach
                </p>
                <!-- form start -->
                <form role="form" action="{{route ('updateVaccancy' , $vaccancy->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Room Type</label>
                            <select class="form-control" name="type">
                                @foreach( $rooms as $room)
                                    <option value="{{ $room->type }}" selected="selected">{{ $room->type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Seat</label>
                            <input type="number" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="seats" value="{{ $vaccancy -> seats }}">
                        </div>


                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        </div>
                </form>
            </div><!-- /.box -->

        </div>
    </div>
    </div>
</div>

@stop