@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<main class="main">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            List Tasks
            </div>
            <div class="card-body">
                <a href="{{url('/profile/add')}}">
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
                        <th nowrap>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    @foreach ($list_users as $users)
                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td nowrap>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>
                            <div style="display:inline-block">
                            <a href="{{url('/profile/edit/' .$users->id)}}"><button>Ubah</button></a>
                            </div>
                            &nbsp;&nbsp;|
                            <div style="display:inline-block">
                              <form action="{{url('/profile/delete/' .$users->id)}}" method="post" onsubmit="return validateForm()">
                                <button type="submit">Hapus</button>
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                              </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                    <ul class="pagination">
                    <li>{{$list_users->links()}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
</main>
<script>
    function validateForm(){
        if (confirm("Yakin data akan dihapus?") == true) {
        return true;
        } else {
        return false;
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