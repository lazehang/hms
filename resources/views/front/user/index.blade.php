@extends('layouts.front')
@section('title')
Home
@stop

@section('content')
	 <section id="testimonials" style="background-image: url({{asset ("assets/img/sliders/hostel.jpg")}})">
         <div class="overlay"></div>
        <div class="container" >

            <h2>New Notices</h2>
             <hr class="light-sep">
            
            <div id="" class="owl-carousel owl-theme" data-interval="false">

                <div class="item active" >
                     
                   
            <p>Vaccancies</p>
                    <div class="quote">
                        <table class="table">
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
                <div class="item">
                    <p>Vaccancies</p>
                    <div class="quote">
                        <table class="table">
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
        </div>
            </div>

    </section>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <h2>Welcome To <span>Prince</span></h2>
            <hr class="sep">
            <p class="contents">

                @foreach($home as $intro )
                {{ $intro->content }}
                    @endforeach
            </p>
           
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="{{ asset ("assets/img/welcome/logo.png") }}" alt="logo">
        </div>
    </section>





@stop