@extends('layouts.front')
@section('title')
    Details
    @stop

    @section('content')

        <style>
            .placeholder img{
                height: 180px;
            }
        </style>


        <section id="info-modals">
            <div class="container content">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <h2>Prince Boys Hostel</h2>
                            <hr class="sep">
                        </div>
                        <div class="row placeholders">
                            <a href="#" data-toggle="modal" data-target="#TimeTable">
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="{{ asset('assets/img/time.jpg') }}"  width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Time Table</h4>
                                <span class="text-muted">Check the time table </span>


                            </div>
                                </a>
                            <!-- Modal -->
                            <div class="modal fade" id="TimeTable" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Time Table</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Activity</th>
                                                    <th>Time</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                @foreach($timetables as $timetable)
                                                    <tr>
                                                        <td>{{ $timetable->activity }}</td>
                                                        <td>{{ $timetable->time }}</td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <a href="#"  data-toggle="modal" data-target="#feeStructure">
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="{{ asset('assets/img/fee.jpg') }}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Fee Structure</h4>
                                <span class="text-muted">Something else</span>
                            </div>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="feeStructure" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Hostel Fee</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td>
                                                        SNO
                                                    </td>
                                                    <td>
                                                        Room Type
                                                    </td>
                                                    <td>
                                                        Amount
                                                    </td>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($rooms as $room)
                                                    <tr>
                                                        <td> {{ $i++ }}  </td>
                                                        <td>{{ $room->type }}</td>
                                                        <td>{{ $room->fee }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        Admission Fee
                                                    </td>
                                                    <td>
                                                        3000
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a href="#" data-toggle="modal" data-target="#facilities">
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="{{ asset('assets/img/facilities.png')}}"  width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Facilities</h4>
                                <span class="text-muted">View Here !!</span>
                            </div>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="facilities" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Facilities</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td>
                                                        SNO
                                                    </td>
                                                    <td>
                                                        Room Type
                                                    </td>
                                                    <td>
                                                        Amount
                                                    </td>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($rooms as $room)
                                                    <tr>
                                                        <td> {{ $i++ }}  </td>
                                                        <td>{{ $room->type }}</td>
                                                        <td>{{ $room->fee }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        Admission Fee
                                                    </td>
                                                    <td>
                                                        3000
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a href="#"  data-toggle="modal" data-target="#menu" >
                            <div class="col-xs-6 col-sm-3 placeholder">
                                <img src="{{ asset('assets/img/food.jpg') }}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                                <h4>Food Menu</h4>
                                <span class="text-muted">See Whats up for tonight !! </span>
                            </div>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="menu" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Hostel Fee</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td>
                                                        SNO
                                                    </td>
                                                    <td>
                                                        Room Type
                                                    </td>
                                                    <td>
                                                        Amount
                                                    </td>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($rooms as $room)
                                                    <tr>
                                                        <td> {{ $i++ }}  </td>
                                                        <td>{{ $room->type }}</td>
                                                        <td>{{ $room->fee }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        Admission Fee
                                                    </td>
                                                    <td>
                                                        3000
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="jumbotron">
                            <h1>Welcome</h1>
                            <hr class="sep">
                            <h2>Prince Boy's Hostel</h2>
                        </div>
                      </div>

                </div>

            </div>
        </section>


        {{--<!-- Testimonials--}}
        {{--============================================= -->--}}
        {{--<section id="portfolio">--}}
            {{--<div class="container-fluid">--}}
            {{--<h3>Gallery</h3>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">--}}
                    {{--<a class="portfolio-box" href="{{ asset ("assets/img/portfolio/1.jpg") }}" data-lightbox="image-1" data-title="Your caption">--}}
                        {{--<img src="{{ asset ("assets/img/portfolio/1.jpg") }}" class="img-responsive" alt="1">--}}
                        {{--<div class="portfolio-box-caption">--}}
                            {{--<div class="portfolio-box-caption-content">--}}
                                {{--<div class="project-category text-faded">--}}
                                    {{--Category--}}
                                {{--</div>--}}
                                {{--<div class="project-name">--}}
                                    {{--Project Name--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">--}}
                    {{--<a href="{{ asset ("assets/img/portfolio/2.jpg") }}" class="portfolio-box" data-lightbox="image-2" data-title="Your caption">--}}
                        {{--<img src="{{ asset ("assets/img/portfolio/2.jpg") }}" class="img-responsive" alt="2">--}}
                        {{--<div class="portfolio-box-caption">--}}
                            {{--<div class="portfolio-box-caption-content">--}}
                                {{--<div class="project-category text-faded">--}}
                                    {{--Category--}}
                                {{--</div>--}}
                                {{--<div class="project-name">--}}
                                    {{--Project Name--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">--}}
                    {{--<a href="{{ asset ("assets/img/portfolio/3.jpg") }}" class="portfolio-box" data-lightbox="image-3" data-title="Your caption">--}}
                        {{--<img src="{{ asset ("assets/img/portfolio/3.jpg") }}" class="img-responsive" alt="3">--}}
                        {{--<div class="portfolio-box-caption">--}}
                            {{--<div class="portfolio-box-caption-content">--}}
                                {{--<div class="project-category text-faded">--}}
                                    {{--Category--}}
                                {{--</div>--}}
                                {{--<div class="project-name">--}}
                                    {{--Project Name--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">--}}
                    {{--<a href="{{ asset ("assets/img/portfolio/4.jpg") }}" class="portfolio-box" data-lightbox="image-4" data-title="Your caption">--}}
                        {{--<img src="{{ asset ("assets/img/portfolio/4.jpg") }}" class="img-responsive" alt="4">--}}
                        {{--<div class="portfolio-box-caption">--}}
                            {{--<div class="portfolio-box-caption-content">--}}
                                {{--<div class="project-category text-faded">--}}
                                    {{--Category--}}
                                {{--</div>--}}
                                {{--<div class="project-name">--}}
                                    {{--Project Name--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">--}}
                    {{--<a href="{{ asset ("assets/img/portfolio/5.jpg") }}" class="portfolio-box" data-lightbox="image-5" data-title="Your caption">--}}
                        {{--<img src="{{ asset ("assets/img/portfolio/5.jpg") }}" class="img-responsive" alt="5">--}}
                        {{--<div class="portfolio-box-caption">--}}
                            {{--<div class="portfolio-box-caption-content">--}}
                                {{--<div class="project-category text-faded">--}}
                                    {{--Category--}}
                                {{--</div>--}}
                                {{--<div class="project-name">--}}
                                    {{--Project Name--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">--}}
                    {{--<a href="{{ asset ("assets/img/portfolio/6.jpg") }}" class="portfolio-box" data-lightbox="image-6" data-title="Your caption">--}}
                        {{--<img src="{{ asset ("assets/img/portfolio/6.jpg") }}" class="img-responsive" alt="6">--}}
                        {{--<div class="portfolio-box-caption">--}}
                            {{--<div class="portfolio-box-caption-content">--}}
                                {{--<div class="project-category text-faded">--}}
                                    {{--Category--}}
                                {{--</div>--}}
                                {{--<div class="project-name">--}}
                                    {{--Project Name--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}



    @stop
