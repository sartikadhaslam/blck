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
            Update Status
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{url('/tasks/update/' .$tasks->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="task">Task</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="task" value="{{$tasks->task}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="priority">Priority</label>
                        <div class="col-md-3">
                            <select class="form-control" name="priority" disabled>
                                <option value="High" <?php if($tasks->priority == 'High'){ echo 'selected="selected"';} ?>>High</option>
                                <option value="Normal" <?php if($tasks->priority == 'Normal'){ echo 'selected="selected"';} ?>>Normal</option>
                                <option value="Low" <?php if($tasks->priority == 'Low'){ echo 'selected="selected"';} ?>>Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="status">Status</label>
                        <div class="col-md-3">
                            <select class="form-control" name="status">
                                <option value="New" <?php if($tasks->status == 'New'){ echo 'selected="selected"';} ?>>New</option>
                                <option value="In Progress" <?php if($tasks->status == 'In Progress'){ echo 'selected="selected"';} ?>>In Progress</option>
                                <option value="Complete" <?php if($tasks->status == 'Complete'){ echo 'selected="selected"';} ?>>Complete</option>
                                <option value="Not Started" <?php if($tasks->status == 'Not Started'){ echo 'selected="selected"';} ?>>Not Started</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="start_date">Start Date</label>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="start_date" value="{{$tasks->start_date}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="due_date">Due Date</label>
                        <div class="col-md-3">
                        <input class="form-control" type="date" name="due_date" value="{{$tasks->due_date}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="notes">Notes</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="notes" readonly>{{$tasks->notes}}</textarea>
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