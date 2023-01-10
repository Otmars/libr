@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif

    
    <a href=" {{url('empleado/create')}} "><button class="btn btn-primary" type="button">Nuevo Empleado</button></a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td> {{$empleado->id}} </td>
                <td> <img src=" {{asset('storage').'/'.$empleado->Foto}} " alt="" width="100px"> </td>
                <td> {{$empleado->Nombre}} </td>
                <td> {{$empleado->ApellidoPaterno}} </td>
                <td> {{$empleado->ApellidoMaterno}} </td>
                <td> {{$empleado->Email}} </td>
                <td> <a href=" {{ url('/empleado/'.$empleado->id.'/edit') }} "><button class="btn btn-secondary" type="button">Editar</button></a> 
                
                |

                    <form method="post" action=" {{url('/empleado/'.$empleado->id)}} " class="d-inline">
                        @csrf
                        {{ method_Field('DELETE') }}

                        <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('Deseas borrar '+<?php echo $empleado->id ?>)">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
