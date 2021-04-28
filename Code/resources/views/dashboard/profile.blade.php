@extends('layout.adminlayout')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
{{--            <div class="text-center">--}}
{{--                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">--}}
{{--                <h6>Upload a different photo...</h6>--}}

{{--                <input type="file" class="form-control">--}}
{{--            </div>--}}
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
{{--            <div class="alert alert-info alert-dismissable">--}}
{{--                <a class="panel-close close" data-dismiss="alert">×</a>--}}
{{--                <i class="fa fa-coffee"></i>--}}
{{--                This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
{{--            </div>--}}
            <h3>Personal info</h3>

            <form action="{{ route('edit_profile',auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="Admin_Name" type="text" value="{{auth()->user()->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="Admin_Email" type="text" value="{{auth()->user()->email}}">
                    </div>
                </div>

                <form method="POST" action="{{ route('change.password') }}">
                    @csrf

                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach

                <div class="form-group">
                    <label class="col-md-3 control-label">Current Password</label>
                    <div class="col-md-8">
                        <input class="form-control" name="current_password" value="" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">New password:</label>
                    <div class="col-md-8">
                        <input class="form-control" name="new_password" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
                </form>
            </form>


        </div>
    </div>
</div>
<hr>
@endsection
