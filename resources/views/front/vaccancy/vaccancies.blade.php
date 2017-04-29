@extends('layouts.admin')
@section('content')

 <div id="page-content-wrapper">
   

  
     <section class="content-header">
         <div class="container">
      <h1>
        Vaccancies
        <small>Control panel</small>
      </h1>

       <a href="{{route('addVaccancy')}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Create Vaccancy</button></a>
        </div>

    </section>

    <div class="container">

      <table class="table table-striped table-responsive" >
        <thead>
          <tr>
           
            <td>room_type</td>
            <td>seats</td>
            <td>Action</td>
          </tr>
        </thead>
            
                <tbody>  
                
                  @foreach( $vaccancies as $vaccancy )
                            <tr>
                                <td>{{ $vaccancy->type }}</td>
                                <td>{{ $vaccancy->seats }}</td>
                                <td><a href="{{route('editVaccancy', $vaccancy->id)}}"><button class="btn btn-success btn-sm">Edit</button> </a>
                                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"> <button class="btn btn-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                            <!-- Small modal -->


                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: yellow">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Warning</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure ??</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                            <a href="{{route ('deleteVaccancy', $vaccancy->id)}}"> <button class="btn btn-danger">Yes</button></a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach
        </tbody>
      </table>
        {!! $vaccancies -> links() !!}
    </div>

     <div class="content">

         <table class="table table-striped" id="booking-table" >
             <thead>
             <tr>

                 <th>Booking_id</th>
                 <th>Room</th>
                 <th>Name</th>
                 <th>Contact</th>
                 <th>Email</th>
                 <th>Message</th>
                 <th>Action</th>
             </tr>
             </thead>

             <tbody>


             @if(!$bookings == null)
             @foreach( $bookings as $booking )
                 <tr>
                     <td>{{ $booking->id }}</td>
                     <td>{{ $booking->type }}</td>
                     <td>{{$booking->name}}</td>
                     <td>{{ $booking->contact }}</td>
                     <td>{{ $booking->email }}</td>
                     <td>{{ $booking->message }}</td>
                     <td>
                         <a href="#"  data-toggle="modal" data-target="#bookingdelete"> <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button></a>
                     </td>
                 </tr>
                 <div class="modal fade" id="bookingdelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                     <div class="modal-dialog modal-sm" role="document">
                         <div class="modal-content">
                             <div class="modal-header" style="background-color: yellow">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">Warning</h4>
                             </div>
                             <div class="modal-body">
                                 <p>Are you sure ??</p>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                 <a href="{{ route('deleteBooking',[$booking->id, $booking->vaccancy_id] ) }}"> <button class="btn btn-danger">Yes</button></a>
                             </div>


                         </div>
                     </div>
                 </div>
             @endforeach
             </tbody>
         </table>
         {!! $bookings -> links() !!}
                 <!-- Small modal -->


         @else
                 <tr>
                     <td> NO BOOKINGS !!</td>
                 </tr>
         </tbody>
         </table>
             @endif

     </div>

  </div>
  <!-- /.content-wrapper -->
 <script>
     $(document).ready(function(){
         $('#booking-table').dataTable();
     });
 </script>

@stop