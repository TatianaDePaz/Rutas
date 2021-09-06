@extends('layauts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Estado departamentos</h2>
            </div>
        </div>
        <div class="pull-right">
            <a href="{{ route('departamentos.index') }}" class="btn btn-prymary">Volver</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li> {{$error}}</li>
                @endforeach
            </ul>
        </div>  
    @endif
    <form action="{{ route('departamentos.update', $departamentos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sx-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre_departamento</strong>
                    <input type="text" name="nombre_departamento" class="form-control" value="{{$departamentos->nombre_departamento}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
    </form>
@endsection