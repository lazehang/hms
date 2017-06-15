@extends('layouts.front')
@section('title')
{{Auth::user()->name}}
@stop
@section('content')
    <script>
        alert("You have {{$date}} days remaining !! :)");
    </script>
	 <style>


         /* ==========================================================================
            Author's custom styles
            ========================================================================== */

         body
         {
             font-family: 'Open Sans', sans-serif;
             background: rgba(22, 30, 48, 0.34);

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
             width: 230px;
             height: 230px;
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
                 width: 150px;
                 height: 150px;
             }
         }
     </style>


         <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
         <div class="container">
             <div class="row">
                 <div class="fb-profile">
                     <img align="left" class="fb-image-lg"  src="{{asset('assets/img/cities11.jpg')}}" alt="Profile image example"/>
                     <img align="left" class="fb-image-profile thumbnail" src="{{ asset('assets/images/')}}/{{ $acc->profile_pic }}" alt="Profile image example"/>
                     <div class="fb-profile-text">
                         <div class="inline">
                             <h1>{{ $acc->name }}</h1>

                         </div>

                         @if(isset($room))
                             <h4>Remaining Days :  <span class="@if($date < 10) text-danger @else text-default @endif ">{{ $date }}</span></h4>
                             <h4>Start Date</h4><p>{{ $room->created_at->format('Y-m-d') }}</p>

                         @endif
                     </div>
                     <a class="btn btn-primary" data-toggle="modal" data-target="#account">
                         Your Account History
                     </a>
                     <div>
                        <table class="table table-striped">
                             <thead>
                             <tr>
                                 <th>Student Name</th>
                                 <th>Amount to be paid</th>
                                 <th>Room Type</th>
                                 <th>Action</th>

                             </tr>
                             </thead>
                             <tbody>
                             @if(!empty($accounts))
                                 @foreach($accounts as $account)
                                     <tr>
                                         <td>{{ $account->name }}</td>
                                         <td>{{ $account->fee }}</td>
                                         <td> {{ $account->type }}</td>
                                         <td>{{ $old->format('Y-m-d') }}</td>
                                     </tr>
                                 @endforeach
                             @else
                                 <tr>
                                     <td>
                                        <h2 class="text-center text-danger"> No Dues</h2>
                                     </td>
                                </tr>
                             @endif

                             </tbody>
                         </table>
                     </div>

                 </div>


             </div>

         </div> <!-- /container -->
     <!-- Modal -->
     <div id="account" class="modal fade" role="dialog">
         <div class="modal-dialog">

             <!-- Modal content-->
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Account History</h4>
                 </div>
                 <div class="modal-body">
                     <table class="table table-striped">
                         <thead>
                         <th>Student's ID</th>
                         <th>Student's Name</th>
                         <th>Room</th>
                         <th>Fee</th>
                         <th>Date</th>
                         </thead>
                         <tbody>
                         @if (isset($histories))
                         @foreach ($histories as $history)
                            <tr>
                                <td>{{ $history->std_id }}</td>
                                <td>{{ $history->name }}</td>
                                <td>{{ $history->type }}</td>
                                <td>{{ $history->fee }}</td>
                                <td>{{ $history->created_at }}</td>
                            </tr>
                             @endforeach
                             @else
                             <tr>
                                 <td colspan="5" class="text-center"><h1>No Payment History</h1></td>
                             </tr>
                             @endif
                         </tbody>
                     </table>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
             </div>

         </div>
     </div>


  

@stop
