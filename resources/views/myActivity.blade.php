@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($kegiatanku as $kegiatanku)
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-header border-0">
                        <img src="{{url('storage/'. $kegiatanku->activity->image)}}" alt="" style="width: 400px" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">{{$kegiatanku->activity->nama_activity}}</h1>
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title">{{$kegiatanku->activity->tgl_mulai}} - {{$kegiatanku->activity->tgl_mulai}}</h6>
                            <h6 class="card-title">IDR : {{$kegiatanku->activity->idr}},00</h6>
                        </div>
                        <h6>
                            {{$kegiatanku->activity->desc}}
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection