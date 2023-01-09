<label for="Nombre"> Nombre </label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre=''}}"><br>
    <label for="ApellidoPaterno"> ApellidoPaterno</label>
    <input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno=''}}"><br>
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input class="form-control" type="text" name="ApellidoMaterno"  id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno}}"><br>
    <label for="Email"> Email </label>
    <input class="form-control" type="text" name="Email" id="Email" value="{{isset($empleado->Email)?$empleado->Email}}"><br>
    <label for="Foto">Foto</label>
    @if(isset($empleado->Foto))
    {{asset('storage').'/'.$empleado->Foto}}
    <img src=" {{asset('storage').'/'.$empleado->Foto}} " alt="">
    @endif
    <input class="form-control" type="file" name="Foto" id="Foto" value=""><br>
    <input class="form-control" type="submit" value="Guardar Datos">