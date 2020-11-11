@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<main class="main">
    <div class="col-lg-3">
        <a href="/tasks/due"><div class="card text-center" >
            <div class="card-body">
            {{$list_count}}
            </div>
            <div class="card-footer">
            Due Tasks
            </div>
        </div></a>
    </div> 
</main>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop