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
            Add Tasks
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{url('/tasks/store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="task">Task</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="task">
                            @if($errors->has('task'))
                            <span class="help-block">{{$errors->first('task')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="priority">Priority</label>
                        <div class="col-md-3">
                            <select class="form-control" name="priority">
                                <option disabled selected value> -- select an option -- </option>
                                <option value="High">High</option>
                                <option value="Normal">Normal</option>
                                <option value="Low">Low</option>
                            </select>
                            @if($errors->has('priority'))
                            <span class="help-block">{{$errors->first('priority')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="status">Status</label>
                        <div class="col-md-3">
                            <select class="form-control" name="status">
                                <option disabled selected value> -- select an option -- </option>
                                <option value="New">New</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Complete">Complete</option>
                                <option value="Not Started">Not Started</option>
                            </select>
                            @if($errors->has('status'))
                            <span class="help-block">{{$errors->first('status')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="start_date">Start Date</label>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="start_date">
                            @if($errors->has('start_date'))
                            <span class="help-block">{{$errors->first('start_date')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="due_date">Due Date</label>
                        <div class="col-md-3">
                        <input class="form-control" type="date" name="due_date">
                            @if($errors->has('due_date'))
                            <span class="help-block">{{$errors->first('due_date')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="notes">Notes</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="notes"></textarea>
                            @if($errors->has('notes'))
                            <span class="help-block">{{$errors->first('notes')}}</span>
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
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop