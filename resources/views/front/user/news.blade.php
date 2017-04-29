@extends('layouts.front')
@section('title')
News
@stop

@section('content')
<section id="portfolio">
    <div class="container content" style=";">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <h2>Room Vaccancies</h2>
                <hr class="sep">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead style="background-color: #666; color: #fff;">
                        <tr>
                            <td>Room Type</td>
                            <td>No. Of Seats</td>
                            <td> Action </td>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach( $vaccancies as $vaccancy )
                            @if($vaccancy->seats > 0)
                                <tr>
                                    <td>{{ $vaccancy->type }}</td>
                                    <td>{{ $vaccancy->seats }}</td>
                                    <td><a href="{{route('booking', $vaccancy->id)}}"> Book Now </a></td>
                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            </div>
     </section>

@stop