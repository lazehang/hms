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
                                    <a href="{{route ('deleteVaccancy', $vaccancy->id)}}"> <button class="btn btn-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
        </tbody>
      </table>
        {!! $vaccancies -> links() !!}
    </div>

  </div>
  <!-- /.content-wrapper -->

@stop