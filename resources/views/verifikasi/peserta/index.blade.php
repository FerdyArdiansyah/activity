@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mb-3">
                        {{-- <a href="{{route('verifikasi.pendaftaran')}}" class="btn btn-info">Daftar Ulang</a>
                        <a href="{{route('verifikasi.peserta')}}" class="btn btn-info">Peserta</a> --}}
                    </div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info">Cari Data</button>
                            </div>
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kegiatan</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registers as $register)
                                <tr>
                                    <td>{{$register->activity->kode_activity}}</td>
                                    <td>anjay</td>
                                    <td>{{$register->user->name}}</td>
                                    <td>{{$register->created_at->diffForHumans()}}</td>
                                    
                                    <td>
                                        <span class="badge badge-info">
                                            {{$register->status}}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{route('cetak.sertifikat', $register->id)}}" class="btn btn-info btn-sm">Cetak Sertifikat</a>
                                    </td>
                                </tr>
                                @endforeach                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection