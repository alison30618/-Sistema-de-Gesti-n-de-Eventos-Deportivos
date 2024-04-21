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
               <h1>Crear participante</h1>
               <hr>
               <label for="exampleFormControlInput1" class="form-label">Evento
               </label>
               <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione un evento</option>
                <option value="1">UEFA BARRIOS LEAGUE</option>
              </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Equipo
                </label>
                <select class="form-select" aria-label="Default select example">
                 <option selected>Seleccione un equipo</option>
                 <option value="1">Adrian FC</option>
               </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Resultado
                </label>
                <input required type="number" name="resultado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un resultado">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Premios
                </label>
                <input required type="number" name="premios" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese los premios">
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
                 Estos son los participantes!
                </div>

            <table class="table">
                <thead class="table table-dark">
                    <th>ID</th>
                    <th>EVENTO</th>
                    <th>EQUIPO</th>
                    <th>RESULTADO</th>
                    <th>PREMIOS</th>
                    <th>Accion</th>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>UEFA BARRIOS LEAGUE</td>
                        <td>Adrian FC</td>
                        <td>7</td>
                        <td>2</td>
                        <td><a href="{{ route('participantes.editar')}}" class="btn btn-outline-primary"> EDITAR <i class="bi bi-pen"></i></a>
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
