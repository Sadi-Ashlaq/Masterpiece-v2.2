@extends('layout.adminlayout')
@section('content')

    <title>Manage Contact</title>

    <body class="animsition container-fluid">
    <div class="page-wrapper">
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
                                        <li class="list-inline-item">Manage Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Manage Contact

                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>

    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">

                <table class="table table-borderless table-data3">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contacts as $Contact)
                    <tr>
                        <td>{{$Contact->id}}</td>
                        <td>{{$Contact->name}}</td>
                        <td>{{$Contact->email}}</td>
                        <td>{{$Contact->message}}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->

@endsection
