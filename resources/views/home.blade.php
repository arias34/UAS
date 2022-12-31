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
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="chart">

                            </div>
                        </div>
                    </div>
                </div><!-- /# column -->

                <div class="col-sm-12 mb-4">
                    <div class="card-group">
                        <div class="card col-md-4 no-padding bg-flat-color-5">
                            <div class="card-body">
                                <div class="h1 text-muted text-right mb-4">
                                    <i class="fa fa-users text-light"></i>
                                </div>

                                <div class="h4 mb-0 text-light">
                                    <span class="count">{{ $jumlah_mahasiswa }}</span>
                                </div>

                                <small class="text-uppercase font-weight-bold text-light">Jumlah Mahasiswa</small>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-md-4 no-padding bg-flat-color-1">
                            <div class="card-body">
                                <div class="h1 text-muted text-right mb-4">
                                    <i class="fa fa-users text-light"></i>
                                </div>

                                <div class="h4 mb-0 text-light">
                                    <span class="count">{{ $jumlah_dosen }}</span>
                                </div>
                                <small class="text-uppercase font-weight-bold text-light">Jumlah Dosen</small>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-md-4 no-padding bg-flat-color-4">
                            <div class="card-body">
                                <div class="h1 text-muted text-right mb-4">
                                    <i class="fa fa-users text-light"></i>
                                </div>

                                <div class="h4 mb-0 text-light">
                                    <span class="count">{{ $jumlah_pegawai }}</span>
                                </div>
                                <small class="text-uppercase font-weight-bold text-light">Jumlah Pegawai</small>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
                </div>




        </div>

    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Universitas Semarang'
    },
    xAxis: {
        categories: [
            'Total Anggota Universitas Semarang'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Orang'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Mahasiswa',
        data: [{{ $jumlah_mahasiswa }}]

    },{
        name: 'Dosen',
        data: [{{ $jumlah_dosen }}]

    },{
        name: 'Pegawai',
        data: [{{ $jumlah_pegawai }}]

    }]

});
</script>

@endsection
