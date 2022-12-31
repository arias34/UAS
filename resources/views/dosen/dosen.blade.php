@extends('main')
@section('title', 'Dashboard')

@section('breadcrumps')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dosen</h1>
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
                    <strong>Data Dosen</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dosen/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
                <div class="card-body table-responsive ">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pendidikan</th>
                                <th>Mengampu</th>
                                <th></th>
                                </tr>
                        </thead>
                        <body>
                            @foreach ($dosen as $key => $dsn)
                                <tr class="text-center">
                                    <td>{{ $dosen->firstItem() + $key}}</td>
                                    <td>{{ $dsn->NIDN}}</td>
                                    <td>{{ $dsn->Nama}}</td>
                                    <td>{{ $dsn->Alamat}}</td>
                                    <td>{{ $dsn->Pendidikan}}</td>
                                    <td>{{ $dsn->Mengampu}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('dosen/edit/' .$dsn->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('dosen/' .$dsn->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                        {{ $dosen->links() }}
                    </div>

                </div>
            </div>
        </div>
            </div>
        </div>
    </div>

</div>
@endsection
