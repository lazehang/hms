@extends('layouts.front')
@section('title')
{{Auth::user()->name}}
@stop
@section('content')
	 <style>


         /* ==========================================================================
            Author's custom styles
            ========================================================================== */

         body
         {
             font-family: 'Open Sans', sans-serif;
         }

         .fb-profile img.fb-image-lg{
             z-index: 0;
             width: 100%;
             margin-bottom: 10px;
             max-height: 300px;
         }

         .fb-image-profile
         {
             margin: -90px 10px 0px 50px;
             z-index: 9;
             width: 20%;
         }

         @media (max-width:768px)
         {

             .fb-profile-text>h1{
                 font-weight: 700;
                 font-size:16px;
             }

             .fb-image-profile
             {
                 margin: -45px 10px 0px 25px;
                 z-index: 9;
                 width: 20%;
             }
         }
     </style>


         <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
         <div class="container">
             <div class="fb-profile">
                 <img align="left" class="fb-image-lg"  src="{{asset('assets/images/1488534685.jpg')}}" alt="Profile image example"/>
                 <img align="left" class="fb-image-profile thumbnail" src="/assets/images/{{ $acc->profile_pic }}" alt="Profile image example"/>
                 <div class="fb-profile-text">
                     <h1>{{ $acc->name }}</h1>
                     <p>Girls just wanna go fun.</p>
                    @if($room) <p>{{$room->created_at}}</p> @endif
                 </div>
             </div>
         </div> <!-- /container -->

  

@stop