@extends('layouts.app')

@section('content')
<div class="conaiter d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('siswa.index')}}" class="btn btn-primary">Kembali</a>
            <div class="row ml-2">
                <h4 class="">Nama : {{$siswa->nama}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="">NIS : {{$siswa->nis}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="">Tanggal Lahir : {{$siswa->tgl_lahir}}</h4>
            </div>
        </div>
    </div>
</div>
@endsection