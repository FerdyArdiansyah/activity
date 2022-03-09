@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: -70px">
            @foreach($kegiatans as $kegiatan)
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                    
                    <h3 class="text-info">{{$kegiatan->nama_activity}}</h3>
                    <p class="text-muted">
                        {{str_limit(strip_tags($kegiatan->desc), 50)}}
                    </p>
                    <div class="">
                        @if (strlen(strip_tags($kegiatan->desc)) > 50)
                        <a href="http://" class="btn btn-outline-info">Read more</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row pt-4">
        @foreach ($activitys as $activity)
            <div class="col-md-12 mb-4">
                <div class="card border-1">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="{{url('storage/'. $activity->image)}}" alt="" class="mr-3 rounded" width="100px" height="100px">
                                <div class="">
                                    <h3 class="text-info">{{$activity->nama_activity}}</h3>
                                    <p class="text-muted">
                                        {{str_limit(strip_tags($kegiatan->desc), 100)}}
                                    </p>
                                    <small>
                                        {{$activity->status}}, {{$activity->created_at->diffForHumans()}}
                                    </small>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{route('kegiatan.create', $activity->id)}}" class="btn btn-outline-info">Read More</a>
                            </div>
                            
                        </div>                
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection