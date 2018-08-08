@extends('layouts.front')
@section('title')
    booking
@stop

@section('content')
	<style>

		body {
			font-family: 'Lato', sans-serif;
			background: #e2dedb;
			color: #b3aca7;
		}

		header {
			position: relative;
			margin: 100px 0 25px 0;
			font-size: 2.3em;
			text-align: center;
			letter-spacing: 7px;
		}

		#form {
			position: relative;
			width: 500px;
			margin: 50px auto 100px auto;
		}

		input {
			font-family: 'Lato', sans-serif;
			font-size: 1em;
			width: 470px;
			height: 50px;
			padding: 0px 15px 0px 15px;
			background: transparent;
			outline: none;
			color: #726659;
			border: solid 1px #b3aca7;
			border-bottom: none;
			transition: all 0.3s ease-in-out;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
		}
		input[type='submit']{
			border-bottom: 1px solid #b3aca7;
		}

		input:hover {
			background: #b3aca7;
			color: #e2dedb;
		}

		textarea {
			width: 470px;
			max-width: 470px;
			height: 110px;
			max-height: 110px;
			padding: 15px;
			background: transparent;
			outline: none;
			color: #726659;
			font-family: 'Lato', sans-serif;
			font-size: 0.875em;
			border: solid 1px #b3aca7;
			transition: all 0.3s ease-in-out;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
		}

		textarea:hover {
			background: #b3aca7;
			color: #e2dedb;
		}


	</style>
    <section id="portfolio" style="background: #fff">
        <div class="container text-center" style="">

            	<div class="col-md-12 col-sm-12 col-xs-12">
					<header>Booking Form</header>

					<form id="form" class="topBefore" action="{{route('bookRoom',$bookings->id)}}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" class="form-control" name="vaccancy_id" value="{{ $bookings->id }}">
						<h3 class="text-primary">Selected Room</h3><h4 class="text-success">{{ $bookings->type }}</h4>
						<input id="name" name="name" type="text" placeholder="NAME">
						<input id="email" name="email" type="text" placeholder="E-MAIL">
						<input class="" name="contact" value="" placeholder="98000000000">

						<textarea id="message" type="text" name="message" placeholder="MESSAGE"></textarea>
						<input id="submit" type="submit" value="GO!">

					</form>
            		{{--<form class="">--}}
						{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
						{{--<div class="form-group">--}}


            			{{--</div>--}}
						{{--<div class="form-group">--}}
							{{--<label class="col-md-6">Room</label>--}}
							{{--<input class="form-control col-md-6" disabled value="{{ $bookings->type }}">--}}
						{{--</div>--}}

            			{{--<div class="form-group">--}}
            				{{--<label>Name</label>--}}
            				{{--<input class="form-control" name="name" value="" placeholder="Your Name">--}}
            			{{--</div>--}}
						{{--<div class="form-group">--}}
							{{--<label>Address</label>--}}
							{{--<input class="form-control" name="email" value="" placeholder="example@gmail.com">--}}
						{{--</div>--}}
						{{--<div class="form-group">--}}
							{{--<label>Contact</label>--}}
							{{--<input class="form-control" name="contact" value="" placeholder="98000000000">--}}
						{{--</div>--}}
            			{{--<input type="submit" class="btn btn-primary" role="submit" name="submit" value="submit">--}}
            			{{----}}
            		{{--</form>--}}
            	</div>
            	

        </div>
    </section>

@stop