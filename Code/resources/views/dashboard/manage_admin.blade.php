@extends('layout.adminlayout')
@section('content')
<title>Manage Admin</title>
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
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
                                <li class="list-inline-item">Manage Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   END BREADCRUMB  -->
    <!--      WELCOME      -->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Manage Admin

                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->
    <!-- STATISTIC-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">ADD ADMIN FORM</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Add Admin</h3>
                                </div>
                                <hr>
                                <form action="{{ route('store_admin') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Name</label>
                                    <input id="cc-pament" name="Admin_Name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Admin Email</label>
                                    <input id="cc-name" name="Admin_Email" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Admin Password</label>
                                    <input id="cc-number" name="Admin_Password" type="password" class="form-control cc-number identified visa" value="" data-val="true"
                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                    autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">
                                    <span id="payment-button-amount">Add Admin</span>
                                    <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                    <th>Admin Name</th>
                                    <th>Admin Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $Admin)
                                <div class="modal fade gg" id="edit_{{$Admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="exampleModalLongTitle">Update Admin</h3>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('edit_admin', [$Admin -> id]) }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Name</label>
                                    <input id="cc-pament" name="Admin_Name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$Admin->name}}">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Admin Email</label>
                                    <input id="cc-name" name="Admin_Email" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="{{$Admin->email}}">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">

                                    <span id="payment-button-amount">Update Admin</span>
                                    <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                                </button>
                            </div>
                        </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                <tr>

                                    <td>{{$Admin->id}}</td>
                                    <td>{{$Admin->name}}</td>
                                    <td>{{$Admin->email}}</td>


                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_{{$Admin->id}}">
                                        Edit
                                        </button>
                                                        </td>

                                    <td>
                                        <button type="submit" class="btn btn-danger"><a href="{{ route('delete_admin', [$Admin -> id]) }}" class="text-white">Delete</a>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @endsection
