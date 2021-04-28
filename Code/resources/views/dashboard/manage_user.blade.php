@extends('layout.adminlayout')

@section('content')

<title>Manage User</title>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7 container-fluid">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Manage User</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Manage User

                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->

            <!-- END STATISTIC-->

                                <!-- DATA TABLE -->
                                <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>

                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <div class="modal fade gg" id="edit_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <h3 class="modal-title" id="exampleModalLongTitle">Update User</h3>

                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('edit_user', [$user -> id]) }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="cc-payment" class="control-label mb-1">User Name</label>
                                                                    <input id="cc-pament" name="User_Name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$user -> name}}">
                                                                </div>
                                                                <div class="form-group has-success">
                                                                    <label for="cc-name" class="control-label mb-1">User Email</label>
                                                                    <input id="cc-name" name="User_Email" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="{{$user->email}}">
                                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                                </div>

                                                        </div>
                                                        <div>
                                                            <button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">

                                                                <span id="payment-button-amount">Update User</span>
                                                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                                                            </button>
                                                        </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                </div>
                                            <tr>

                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_{{$user->id}}">Edit </button>


                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger"><a href="{{ route('delete_user', [$user -> id]) }}" class="text-white">Delete</a> </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$users->links()}}
                                </div>
                                <!-- END DATA TABLE -->

            <!-- STATISTIC CHART-->

                            <!-- END TOP CAMPAIGN-->

                            <!-- CHART PERCENT-->

                            <!-- END CHART PERCENT-->


@endsection
