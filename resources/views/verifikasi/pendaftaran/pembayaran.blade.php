@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            Silakan Masukan Bukti Pembayaran Anda
                        </div>
                        <form action="{{route('user-verifikasi-pembayaran', $pembayaran->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="register_id" id="" class="form-control" value="{{$pembayaran->id}}">
                                        <input type="text" name="" id="" class="form-control" value="{{$pembayaran->activity->kode_activity}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" name="image" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="desc" id="" class="form-control">

                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection