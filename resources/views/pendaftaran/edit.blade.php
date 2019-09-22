@extends('layouts.app')

@section('content')
    
    <h2>Form Ubah Data Siswa Baru</h2>
    {!! Form::open(['action' => ['PendaftaranController@update', $pendaftar->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nis', 'NIS :')}}
            {{Form::text('nis', $pendaftar->nis, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('nama', 'Nama :')}}
            {{Form::text('nama', $pendaftar->nama, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('alamat', 'Alamat :')}}
            {{Form::textarea('alamat', $pendaftar->alamat, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('smp', 'Asal SMP :')}}
            {{Form::text('smp', $pendaftar->smp, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('jurusan1', 'Jurusan 1 :')}}
            {{Form::text('jurusan1', $pendaftar->jurusan1, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('jurusan2', 'Jurusan 2 :')}}
            {{Form::text('jurusan2', $pendaftar->jurusan2, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('jurusan3', 'Jurusan 3 :')}}
            {{Form::text('jurusan3', $pendaftar->jurusan3, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('nohp', 'Nomor HP :')}}
            {{Form::text('nohp', $pendaftar->nohp, ['class' => 'form-control'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            
    {!! Form::close() !!}
@endsection