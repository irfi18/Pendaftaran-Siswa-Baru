@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <p>Anda dapat mendaftar menjadi Siswa Baru</p>
                    <a href="/pendaftaran/create" class="btn btn-default" >Daftar</a>
                    <table class="table table-stripeed">
                        @foreach($pendaftarans as $pendaftaran)
                            <tr>
                                <th>Data Pendaftaran </th>
                                <th><a href="/pendaftaran/{{$pendaftaran->id}}/edit" class="btn btn-default" >Ubah</a></th>
                                <th>{!!Form::open(['action' => ['PendaftaranController@destroy', $pendaftaran->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}</th>                            </tr>
                            
                        @endforeach
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
