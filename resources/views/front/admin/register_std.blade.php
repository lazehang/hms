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
          <h1>Register New Student</h1>

        </section>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route ('post_student') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class=" control-label">E-Mail Address</label>

                                <div class="">
                                    <input id="email" type="email" placeholder="email@example.com" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">--}}
                            {{--<label for="role_id" class="col-md-4 control-label">Role id</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<input id="role_id" type="text" class="form-control" name="role_id" value="{{ old('role_id') }}" required autofocus>--}}

                            {{--@if ($errors->has('role_id'))--}}
                            {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('role_id') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class=" control-label">Password</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class=" control-label">Confirm Password</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" placeholder="John Doe" id="exampleInputEmail1" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">contact</label>
                                <input type="number" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="contact">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">address</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="address">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">school</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="school">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">father's Name</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="father_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">address</label>
                                <input type="text" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="father_contact">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" placeholder="Available Seats" id="exampleInputEmail1" class="form-control" name="profile_pic">
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