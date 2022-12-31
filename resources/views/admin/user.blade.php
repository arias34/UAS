@extends('main')
@section('title', 'Dashboard')

@section('breadcrumps')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>User</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data User Admin</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('admin/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-info">
                                <tr class="text-center">
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th></th>
                                </tr>
                        </thead>
                        <body>
                            @foreach ($user as $key => $usr)
                                <tr class="text-center">
                                    <td>{{ $user->firstItem() + $key}}</td>
                                    <td>{{ $usr->name}}</td>
                                    <td>{{ $usr->username}}</td>
                                    <td>{{ $usr->email}}</td>
                                    <td class="text-center">
                                        <form action="{{ url('user/' .$usr->user_id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </body>
                    </table>
                    <div class="pull-right">
                        {{ $user->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>

</div>
@endsection
