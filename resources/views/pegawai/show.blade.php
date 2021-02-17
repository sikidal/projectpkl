@extends('main')

@section('title', 'Data Pegawai')
    

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            {{-- <div class="page-title">
                <h1>Data</h1>
            </div> --}}
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Data Pegawai</a></li>
                    <li><a href="#">Data</a></li>
                    <li class="active">Detail</li>
                    {{-- <li class="active"><i class="fa fa-dashboard"></i></li> --}}
                </ol>
            </div>
        </div>
    </div>  
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Detail Data Pegawai</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datapegawai') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Nama Pegawai</th>
                                    <td>{{ $datapegawai->nama_pegawai }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $datapegawai->nip }}</td>
                                </tr>
                                <tr>
                                    <th>NRP</th>
                                    <td>{{ $datapegawai->nrp }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $datapegawai->tempatlahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $datapegawai->tgllahir }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $datapegawai->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>No. Hp</th>
                                    <td>{{ $datapegawai->hp }}</td>
                                </tr>
                                <tr>
                                    <th>Pangkat</th>
                                    <td>{{ $datapegawai->pangkat }}</td>
                                </tr>
                                <tr>
                                    <th>Golongan</th>
                                    <td>{{ $datapegawai->golongan }}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{ $datapegawai->jabatan }}</td>
                                </tr>
                                <tr>
                                    <th>Unit/Bagian</th>
                                    <td>{{ $datapegawai->bagian }}</td>
                                </tr>
                                <tr>
                                    <th>TMT</th>
                                    <td>{{ $datapegawai->tmt }}</td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{ $datapegawai->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Updated at</th>
                                    <td>{{ $datapegawai->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection