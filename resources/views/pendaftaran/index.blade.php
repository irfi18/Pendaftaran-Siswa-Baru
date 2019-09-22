@extends('layouts.app')

@section('content')
    <h2>Page Pendaftaran</h2> <p>klik  <a href="/pendaftaran/create" class="btn btn-primary" >di sini</a>  untuk mendaftar<p>
    @if(count($pendaftarans)>0)
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Asal Sekolah</th>
                </tr>
            </thead>
            @foreach($pendaftarans as $pendaftar)
            <tbody>
                <tr>
                    <td> {{$pendaftar->id}} </td>
                    <td> {{$pendaftar->nis}} </td>
                    <td> {{$pendaftar->nama}} </td>
                    <td> {{$pendaftar->smp}} </td>
                </tr>
            </tbody>
            @endforeach
        </table> 
    @else
        <p>Belum ada siswa yang mendaftar</p>
    @endif
@endsection