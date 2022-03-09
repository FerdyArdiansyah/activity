@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: -100px">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        <h3>Perhatian</h3>
                    </div>
                    <form action="{{route('activity.update', $kegiatan->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Kegiatan</label>
                                    <input type="text" name="kode_activity" id="" class="form-control" value="{{$kegiatan->kode_activity}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label><div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nama Kegiatan</label>
                                            <input type="text" name="nama_activity" id="" class="form-control" value="{{$kegiatan->nama_activity}}">
                                        </div>
                                    </div>
                                    <input type="text" name="nama_activity" id="" class="form-control" value="{{$kegiatan->nama_activity}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" id="" class="form-control" value="{{$kegiatan->nama_activity}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Idr</label>
                                    <input type="text" name="idr" id="" class="form-control" value="{{$kegiatan->idr}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">{{$kegiatan->status}}</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Non-Aktif">Non-Aktif</option>
                                        <option value="Cooming Soon">Cooming Soon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" name="desc" id="" class="form-control" value="{{$kegiatan->desc}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlan Peserta</label>
                                    <input type="text" name="jumlah_peserta" id="" class="form-control" value="{{$kegiatan->jumlah_peserta}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Mulai</label>
                                    <input type="date" name="tgl_mulai" id="" class="form-control" value="{{$kegiatan->tgl_mulai}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Mulai</label>
                                    <input type="date" name="tgl_selesai" id="" class="form-control" value="{{$kegiatan->tgl_selesai}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection