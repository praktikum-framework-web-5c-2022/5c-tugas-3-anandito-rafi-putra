@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    @section('header')
    <div class="container mt-3">
        <div class="header">
            <h1>Dashboard</h1>
            <br>
            <p>Halaman ini menampilkan <span style="color: pink">SIAKAD</span> </p>
      

            <div class="row">
                <div class="col-3">
                  <div class="card" style="max-width: 18rem;">
                        <h5 class="card-header">Dosen <span<i class="bi bi-person-fill" style="float: right"></i></span></h5>
                        <div class="card-body">
                          <h5 class="card-title">Jumlah Dosen</h5>
                          <p class="card-text">{{ $dosen }} Dosen</p>
                          <a href="{{ route('dosen.index') }}" class="btn btn-primary">Lihat Data</a>
                        </div>
                      </div>
                </div>

              
                <div class="col-3">
                  <div class="card" style="max-width: 18rem;">
                    <h5 class="card-header">Mahasiswa <span <i class="bi bi-people-fill" style="float: right"></i></span></h5>
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Mahasiswa</h5>
                      <p class="card-text">{{ $mahasiswa }} Mahasiswa</p>
                          <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Lihat Data</a>
                        </div>
                      </div>
                </div>

                <div class="col-3">
                  <div class="card" style="max-width: 18rem;">
                    <h5 class="card-header">Mata Kuliah <span<i class="bi bi-square" style="float: right"></i></span></h5>
                        <div class="card-body">
                          <h5 class="card-title">Jumlah Mata Kuliah</h5>
                          <p class="card-text">{{ $matakuliah }} Mata Kuliah</p>
                          <a href="{{ route('matakuliah.index') }}" class="btn btn-primary">Lihat Data</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>