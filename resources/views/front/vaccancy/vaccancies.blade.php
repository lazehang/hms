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
                        @endforeach
        </tbody>
      </table>
        {!! $vaccancies -> links() !!}
    </div>
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
     <div class="container">

         <table class="table table-responsive" >
             <thead>
             <tr>

                 <td>Booking_id</td>
                 <td></td>
                 <td>Name</td>
             </tr>
             </thead>

             <tbody>

             @foreach( $bookings as $booking )
                 <tr>
                     <td>{{ $booking->vaccancy_id }}</td>
                     <td>Room has been booked by </td>
                     <td>{{ $booking->name }}</td>
                     <td>
                         <a href="#"  data-toggle="modal" data-target="#bookingdelete"> <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button></a>
                     </td>
                 </tr>
             @endforeach
             </tbody>
         </table>
         {!! $bookings -> links() !!}
     </div>

  </div>
  <!-- /.content-wrapper -->
 <!-- Small modal -->


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

@stop