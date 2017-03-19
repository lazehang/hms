@extends('layouts.admin')
@section('content')

    <div id="page-content-wrapper">

        <div>
            @foreach ($errors -> all() as $error)
                {{ $error }}
            @endforeach
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Student</h1>

        </section>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

            <div>
                <table>
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Contact</td>
                        <td>Image</td>
                    </tr>
                  </thead>
                    <tbody>
                    <td></td>
                    </tbody>

                </table>
            </div>

            </div>
</div>




@stop