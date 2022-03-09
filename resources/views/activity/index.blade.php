@extends('welcome')

@section('content')
    <div class="container" >
        <div class="row mb-3" >
            <div class="col-md-12">
                <div class="card corder-0" >
                    <div class="card-body" >
                        <div class="mb-3">
                            <a href="{{route('activity.create')}}" class="btn btn-info">Tambah Kegiatan</a>
                            <a href="{{route('cetak.all')}}" class="btn btn-success">Cetak Semua Data</a>
                        </div>
                        <form action="{{route('cetak.activity')}}" method="get">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="awal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="akhir" class="form-control">
                                    </div>
                                </div>
                                <div class="">
                                    <button class="btn btn-info">Cari Data</button>
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
                                        <th>Nama Kegiatan</th>
                                        <th>Idr</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Option</th>
                                    </tr>  
                                </thead>
                                <tbody>
                                    @foreach ($activitys as $activity)
                                    <tr>
                                        <td>{{$activity->kode_activity}}</td>
                                        <td>{{$activity->nama_activity}}</td>
                                        <td>{{$activity->idr}}</td>
                                        <td>{{$activity->status}}</td>
                                        <td>{{$activity->created_at->format('Y-m-d')}}</td>
                                        <td>
                                            <form action="{{route('activity.delete', $activity->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('activity.edit', $activity->id)}}" class="btn btn-info btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
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

@section('css')
    <style>
        body {
            background-image: url('img/bg-register.jpg');
            background-size: cover;  
        }
    </style>
@endsection