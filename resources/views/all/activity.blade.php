<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h5 class="text-muted">Smk Albahri</h5>
            <h5 class="text-muted">Jl Yon Armen</h5>
        </div>
        <div class="mb-3">
            @if (request('awal'))
                <small>Dari Tanggal {{reuest(awal)}} Sampai Tanggal {{Request('akhir')}}</small>
            @endif
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode Activity</th>
                    <th>Nama</th>
                    <th>Idr</th>
                    <th>Status</th>
                    <th>desc</th>
                    <th>peserta</th>
                    <th>tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activitys as $activity)
                <tr>
                    <td>{{$activity->kode_activity}}</td>
                    <td>{{$activity->nama_activity}}</td>
                    <td>{{$activity->idr}}</td>
                    <td>{{$activity->status}}</td>
                    <td>{{$activity->desc}}</td>
                    <td>{{$activity->jumlah_peserta}}</td>
                    <td>{{$activity->tgl_mulai}} - {{$activity->tgl_selesai}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</body>
</html>