@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Verifikasi Pendaftaran</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mt-3">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Kode Kegiatan</th>
                                        <th>Nisn</th>
                                        <th>nama</th>
                                        <th>Tgl Daftar</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($verifieds as $pembayaran)
                                        <tr>
                                            <td>
                                                {{$pembayaran->activity->kode_activity}}
                                            </td>

                                            <td>Nisn Belum</td>
                                            <td>{{$pembayaran->user->name}}</td>
                                            <td>{{$pembayaran->created_at->diffForHumans()}}</td>
                                            <td>
                                                <span class="badge bg-secondary text-white">
                                                    {{$pembayaran->status}}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$verifieds->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection