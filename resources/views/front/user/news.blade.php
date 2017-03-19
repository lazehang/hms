@extends('layouts.front')
@section('title')
News
@stop

@section('content')
<section id="portfolio">
    <div class="container" style="padding-top:2em;">
        <h2>Room Vaccancies</h2>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>Room Type</td>
                            <td>No. Of Seats</td>
                            <td> Action </td>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach( $vaccancies as $vaccancy )
                            <tr>
                                <td>{{ $vaccancy->type }}</td>
                                <td>{{ $vaccancy->seats }}</td>
                                <td><a href="{{route('news')}}"> See more </a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
     </section>

@stop