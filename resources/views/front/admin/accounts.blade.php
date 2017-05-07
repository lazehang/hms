@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <h1>
                        Fee Payments
                        <small>Control panel</small>
                    </h1>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>


            </div>
            <div class="container" style="width: 100%">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-striped" id="account-table">
                            <thead>
                                <tr>
                                    <th>Student's Name</th>
                                    <th>Fee</th>
                                    <th>Room</th>
                                    <th>Remaining Days</th>
                                    <th>Deadline</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($accounts as $account)
                                <tr>
                                    <td>{{ $account->name }}</td>
                                    <td>{{ $account->fee }}</td>
                                    <td>{{ $account->type }}</td>

                                    <td><?php
                                        $old = \Carbon\Carbon::parse($account->created_at);
                                        $old->month++;
                                        $fee_account = \App\Account::where('std_id', $account->std_id)
                                                ->orderBy('deadline', 'desc')
                                                ->get()->first();
                                        //if fee has been paid
                                        if (!empty($fee_account))
                                        {
                                            $old = \Carbon\Carbon::parse($fee_account->deadline);
                                            $old->addMonth();
                                        }


                                        $date = $old->diffInDays(\Carbon\Carbon::now());
                                            if ($date < 10)
                                                {
                                                    echo "<span class='text-danger'>".$date."</span>";
                                                }
                                            else{
                                                echo "<span class='text-primary'>".$date."</span>";
                                    }
                                        ?></td>
                                    <td>
                                        <!--if fee has been paid-->
                                        @if (!empty($fee_account))

                                        <?php $old = \Carbon\Carbon::parse($fee_account->deadline); ?>
                                            {{ $old->addMonth()->format('Y-m-d') }}
                                        @else
                                            {{ $old }}
                                        @endif


                                    </td>
                                    <td>
                                        @if(!empty($fee_account))
                                            <a href="{{ route('pay',['id' => $account->std_id, 'date' => $old]) }}" class="btn btn-success">Pay</a></td>
                                        @else
                                            <a href="{{ route('pay',['id' => $account->std_id, 'date' => $old]) }}" class="btn btn-success">Pay</a>
                                        @endif
                                    </td>
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
    $(document).ready(function () {
       $('#account-table').DataTable();
    });
</script>





@stop








































