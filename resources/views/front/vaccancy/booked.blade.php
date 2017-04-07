@extends('layouts.front')
@section('title')
    News
@stop

@section('content')
    <section id="portfolio">
        <div class="container text-center" style="padding-top:2em;">
            <h1 class="text-success">Room Booked</h1>

                <h2>{{$book->type}}</h2>
            <br>
           <small>You get a call in a moment !!</small>
        </div>
    </section>

@stop