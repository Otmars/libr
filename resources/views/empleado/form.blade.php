<a href="{{url('empleado')}}" class="btn btn-primary">Regresar</a><br>
<h1> {{$modo}} </h1>
<div class="form-gropu">
<label for="Nombre"> Nombre </label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
    <label for="ApellidoPaterno"> ApellidoPaterno</label>
    <input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input class="form-control" type="text" name="ApellidoMaterno"  id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
    <label for="Email"> Email </label>
    <input class="form-control" type="text" name="Email" id="Email" value="{{isset($empleado->Email)?$empleado->Email:''}}">
    <label for="Foto">Foto</label>
    @if(isset($empleado->Foto))
    <!-- {{asset('storage').'/'.$empleado->Foto}} -->
    <img src=" {{asset('storage').'/'.$empleado->Foto}} " alt="" width="100px">
    @endif
    <input class="form-control" type="file" name="Foto" id="Foto" value="">
    <input class="form-control btn btn-primary" type="submit" value="{{$modo}}">
    </div>