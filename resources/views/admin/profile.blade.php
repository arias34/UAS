@extends('main')
@section('title', 'Dashboard')

@section('breadcrumps')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
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
            <form action="{{ route('profileUpdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                <br>
                @if (get_meta_value('_foto'))
                    <img class="img-fluid img-profile rounded" style="max-width:150px;max-height:150px" src="{{ asset('foto') . '/' . get_meta_value('_foto') }}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto Profile</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota"
                        value="{{ get_meta_value('_kota') }}">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi"
                        value="{{ get_meta_value('_provinsi') }}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email"
                        value="{{ get_meta_value('_email') }}">
                </div>
            </div>
                <div class="col-5">
                    <h3>Media Sosial</h3>
                    <br>
                    <div class="social-icons">
                        <div class="mb-3">
                            <a class="social-icon" href="https://www.facebook.com/aria.setiaji/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <label for="_facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control form-control-sm" name="_facebook" id="_facebook"
                            value="{{ get_meta_value('_facebook') }}">
                            <div class="mb-3">
                                <a class="social-icon" href="https://github.com/arias34" target="_blank"><i class="fa fa-github"></i></a>
                                <label for="_github" class="form-label">Github</label>
                                <input type="text" class="form-control form-control-sm" name="_github" id="_github"
                                    value="{{ get_meta_value('_github') }}">
                            </div>
                            <div class="mb-3">
                                <a class="social-icon" href="https://www.instagram.com/as.setya_/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
                                <label for="_instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control form-control-sm" name="_instagram" id="_instagram"
                                    value="{{ get_meta_value('_instagram') }}">
                            </div>

                    </div>


                    </div>

                </div>
        </div>
            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
            </form>

            </div></div>

    </div><!-- .animated -->
</div><!-- .content -->
@endsection
