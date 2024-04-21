@extends('components.content')


@section('title', 'Equipos')

@section('css')

@vite(['resources/css/equipos.css'])
@endsection

@section('content')


<div class="contenedor_principal">
    <div class="contenedor_izquierda">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <form action="" method="post">
                @csrf
            <div class="mb-3">
               <h1>Crear equipo</h1>
               <hr>
                <label for="exampleFormControlInput1" class="form-label">Nombre
                </label>
                <input required type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un nombre">
              </div>

              <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Deporte
                 </label>
                 <input required type="text" name="deporte" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un deporte">
               </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Entrenador
                </label>
                <input required type="text" name="entrenador" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un Entrenador">
            </div>
            <div class="mb-3">
                <button class="btn btn-success">GUARDAR  <i class="bi bi-floppy-fill"></i></button>
                <a href="{{ route('home')}}" class="btn btn-light">VOLVER  <i class="bi bi-house"></i></a>
            </div>
        </form>
          </div>
        </div>
    </div>
    <div class="contenedor_derecha">

        <div class="card">

                <div class="card-body">
                 Estos son los equipos!
                </div>

            <table class="table">
                <thead class="table table-dark">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DEPORTE</th>
                    <th>ENTRENADOR</th>
                    <th>ACCIÒN</th>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Adrian FC</td>
                        <td>Futbol</td>
                        <td>Leonardo Dagua</td>
                        <td><a href="{{ route('equipos.editar')}}" class="btn btn-outline-primary"> EDITAR <i class="bi bi-pen"></i></a>
                           <form action="" method="post">
                            @csrf
                            <button class="btn btn-outline-danger">ELIMINAR <i class="bi bi-trash-fill"></i></button></td>
                           </form>

                    </tr>
                </tbody>
            </table>

        </div>
    </div>


</div>

@endsection


@section('js')

@endsection
