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
            List Tasks
            </div>
            <div class="card-body">
                <a href="{{url('/tasks/add')}}">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </a>
                <br/>
                <br/>
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th nowrap>Task</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th nowrap>Notes</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    @foreach ($list_tasks as $tasks)
                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td nowrap>{{ $tasks->task }}</td>
                        <td>{{ $tasks->priority }}</td>
                        <td>{{ $tasks->status }}</td>
                        <td>{{ $tasks->start_date }}</td>
                        <td>{{ $tasks->due_date }}</td>
                        <th>{{ $tasks->notes }}</th>
                        <td>
                            <a href="{{url('/tasks/edit/' .$tasks->id)}}"><button>Update Status</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                    <ul class="pagination">
                    <li>{{$list_tasks->links()}}</li>
                    </ul>
                </div>
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