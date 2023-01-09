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
            <td>  <img src=" {{asset('storage').'/'.$empleado->Foto}} " alt=""> </td>
            <td> {{$empleado->Nombre}} </td>
            <td> {{$empleado->ApellidoPaterno}} </td>
            <td> {{$empleado->ApellidoMaterno}} </td>
            <td> {{$empleado->Email}} </td>
            <td>  <a href=" {{ url('/empleado/'.$empleado->id.'/edit') }} ">Editar</a> |
                
            <form method="post" action=" {{url('/empleado/'.$empleado->id)}} ">
                @csrf
                {{ method_Field('DELETE') }}
                <input class="form-control" type="submit" value="Borrar" name="" onclick="return confirm('Deseas borrar '+<?php echo $empleado->id?>)">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>