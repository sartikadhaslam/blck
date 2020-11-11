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
            Update Profile
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{url('/profile/update/' .$user->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name">Nama</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="name" value="{{$user->name}}">
                            @if($errors->has('name'))
                            <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="email" value="{{$user->email}}">
                            @if($errors->has('email'))
                            <span class="help-block">{{$errors->first('email')}}</span>
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
                <button class="btn btn-sm btn-primary float-right" type="button" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-key"></i> Ubah Password
                </button>
            </div>
                </form> 
            </div>
        </div>
    </div>
</main>
<div class="modal" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Ubah Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="{{url('/profile/ubah-password/'. $user->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="modal-body">
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="password">Password Baru</label>
                <div class="col-md-9">
                    <input class="form-control" id="password" type="password" name="password" minlength="8" autocomplete="new-password">
                    <br/>
                    <input type="checkbox" onclick="showPassword()"> Show Password
                </div>
            </div>
        </div>
        <div class="modal-footer">
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