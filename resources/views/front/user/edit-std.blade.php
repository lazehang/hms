@extends('layouts.front')
@section('content')

    <div id="" style="padding: 2% 0%">

        <div>
            @foreach ($errors -> all() as $error)
                {{ $error }}
            @endforeach
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Register New Student</h1>

        </section>
        <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('updateStd', $student->std_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Room type</label>
                                <select  id="exampleInputEmail1" class="form-control" name="type">
                                    @foreach($rooms as $room)
                                        <option value="{{$room->type}}">{{ $room->type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" placeholder="John Doe" id="exampleInputEmail1" class="form-control" value="{{ $student->name }}" name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">contact</label>
                                <input type="number" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="contact" value="{{ $student->contact }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">address</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="address" value="{{ $student->address }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">school</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="school" value="{{ $student->school }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">father's Name</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="father_name" value="{{ $student->father_name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Father's Address</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="father_contact" value="{{ $student->father_contact }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" placeholder="" id="exampleInputEmail1" class="form-control" name="profile_pic">
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
    </div>






@stop