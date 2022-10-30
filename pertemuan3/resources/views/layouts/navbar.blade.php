@extends('layouts.link')


</style>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #800000;">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: #ffffff;">
            <img src="{{ asset('assets/img/logounsika.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Sistem Informasi Akademik UNSIKAimage.png
          </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'text-white' : 'text-secondary' }}" href="/">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dosen') ? 'text-white':'text-secondary'}}" href="/dosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('mahasiswa') ? 'text-white':'text-secondary'}}" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('matakuliah') ? 'text-white':'text-secondary'}} " href="/matakuliah">Mata Kuliah</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  @yield('header')