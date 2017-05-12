@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <h1>
                        Account History
                        <small>Control panel</small>

                        @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                    </h1>

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>


            </div>
            <div class="container" style="width: 100%">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-striped table-bordered dt-responsive nowrap" id="history-table">
                            <thead>
                            <tr>
                                <th>Student's ID</th>
                                <th>Student's Name</th>
                                <th>Room</th>
                                <th>Fee</th>
                                <th>Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($histories as $history)
                                <tr>
                                    <td>{{ $history->std_id }}</td>
                                    <td>{{ $history->name }}</td>
                                    <td>{{ $history->type }}</td>
                                    <td>{{ $history->fee }}</td>
                                    <td>{{ $history->created_at }}</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal{{$history->id}}" class="btn btn-danger"> Delete </a></td>
                                    <div class="modal fade" id="modal{{ $history->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: yellow">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Warning</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>This action assumes you have not recieved this payment ??</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                    <a href="{{ url('admin/delete_account', $history->id) }}"> <button class="btn btn-danger">Yes</button></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </section>





    </div>
    <!-- /.content-wrapper -->

    <script>
        $(document).ready(function(){
            $('#history-table').DataTable();
        });
    </script>






@stop