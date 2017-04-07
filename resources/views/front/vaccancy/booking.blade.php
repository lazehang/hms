@extends('layouts.front')
@section('title')
    booking
@stop

@section('content')
    <section id="portfolio">
        <div class="container text-center" style="padding-top:2em;">
            <div class="row">
            	<div class="col-md-12">
            		<form class="" action="{{route('bookRoom',$bookings->id)}}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div>
            				<label>Vaccancy</label>
            				<input class="form-control" name="vaccancy_id" value="{{ $bookings->id }}">
            			</div>
            			<div>
            				<label>Name</label>
            				<input class="form-control" name="name" value="" placeholder="Your Name">
            			</div>
            			<input type="submit" role="submit" name="submit" value="submit">
            			
            		</form>
            	</div>
            	
            </div>
        </div>
    </section>

@stop