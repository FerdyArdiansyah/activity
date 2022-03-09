@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{route('datasiswa.create')}}" class="btn btn-info">Tambah Data Siswa</a>
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
                                    <button type="submit" class="btn btn-success">Simpan Data Siswa</button>
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
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->students->first()->nisn ?? 'Belum Tersedia'}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->students->first()->class ?? 'Belum Tersedia'}}</td>
                                        <td>{{$student->students->first()->major ?? 'Belum Tersedia'}}</td>
                                        <td>{{$student->students->first()->status ?? 'Belum Tersedia'}}</td>
                                        
                                        <td>
                                            <form action="{{route('datasiswa.delete', $student->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('datasiswa.edit', $student->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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