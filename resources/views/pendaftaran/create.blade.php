@extends('layouts.app')

@section('content')
    
    <h2>Form Pendaftaran Mahasiswa Baru</h2>
    {!! Form::open(['action' => 'PendaftaranController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nis', 'NIS :')}}
            {{Form::text('nis', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('nama', 'Nama :')}}
            {{Form::text('nama', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('alamat', 'Alamat :')}}
            {{Form::textarea('alamat', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('smp', 'Asal SMP :')}}
            {{Form::text('smp', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('jurusan1', 'Jurusan 1 :')}}
            {{Form::text('jurusan1', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('jurusan2', 'Jurusan 2 :')}}
            {{Form::text('jurusan2', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('jurusan3', 'Jurusan 3 :')}}
            {{Form::text('jurusan3', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('nohp', 'Nomor HP :')}}
            {{Form::text('nohp', '', ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            
    {!! Form::close() !!}
@endsection