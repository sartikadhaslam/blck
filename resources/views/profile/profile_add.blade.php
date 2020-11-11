@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tasks</h1>
@stop

@section('content')
<main class="main">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            Add Profile
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{url('/profile/store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Nama</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name">
                            @if($errors->has('name'))
                            <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="email">
                            @if($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" id="password" class="form-control" name="password" autocomplete="new-password">
                            <br/>
                            <input type="checkbox" onclick="showPassword()"> Show Password
                            @if($errors->has('password'))
                            <span class="help-block">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-success" type="submit">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button class="btn btn-sm btn-danger" type="reset">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
                </form> 
            </div>
        </div>
    </div>
</main>
<script>
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop