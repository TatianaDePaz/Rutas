@extends('layauts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull left">
                <h2>VISTA GENERAL</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('departamentos.create')}}" class="btn btn-success">Nuevo departamento</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
            @foreach ($departamentos as $departamentos)
            <tr>
                <td>{{ $departamentos->id }}</td>
                <td>{{ $departamentos->nombre_departamento }}</td>
                <td>
                    <a href="{{ route('departamentos.edit',$departamentos->id) }}" class="btn btn-primary">Editar</a>

                    <form action="{{ route('departamentos.destroy', $departamentos->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection