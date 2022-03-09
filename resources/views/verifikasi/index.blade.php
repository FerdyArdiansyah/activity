@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('verifikasi.pendaftaran')}}" class="btn btn-info">Daftar Ulang</a>
                        <a href="{{route('verifikasi.peserta')}}" class="btn btn-info">Peserta</a>
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($verifikasi as $register)
                                <tr>
                                    <td>{{$register->activity->kode_activity}}</td>
                                    <td>anjay</td>
                                    <td>{{$register->user->name}}</td>
                                    <td>{{$register->created_at->diffForHumans()}}</td>
                                    
                                    <td>
                                        <span class="badge bg-secondary text-white">
                                            {{$register->status}}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach                              
                            </tbody>
                        </table>
                        {{$verifikasi->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection