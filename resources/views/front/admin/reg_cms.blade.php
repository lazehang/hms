@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Register New Room</h1>
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif

            <div>
                @foreach ($errors -> all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        </section>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" action="{{route ('create_room') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Topic</label>
                                <input type="text" placeholder="John Doe" id="exampleInputEmail1" class="form-control" name="type">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Content</label>
                                <input type="number" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="seats">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="number" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="fee">
                            </div>

                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div><!-- /.box -->
                    </form>


                </div>
            </div>
        </div>
    </div>

@stop