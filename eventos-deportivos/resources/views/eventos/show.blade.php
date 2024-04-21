@extends('components.content')


@section('title', 'Eventos')

@section('css')

@vite(['resources/css/eventos.css'])
@endsection

@section('content')


<div class="contenedor_principal">
    <div class="contenedor_izquierda">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                <div class="mb-3">
                    <h1>Editar evento</h1>
                    <hr>
                    <label for="exampleFormControlInput1" class="form-label">Nombre
                    </label>
                    <input required type="text" name="nombre"  class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un nombre" value="">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea name="descripcion"  required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                  <div  class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                   <input type="date"  name="fecha"  class="form-control" value="">
                </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Ubicación
                     </label>
                     <input required type="text" name="ubicacion" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese una ubicación" value="">
                   </div>
                   <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tipo de evento</label><br>
                   <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="Torneo">
                    <label class="form-check-label" for="inlineRadio1">Torneo</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="Partido">
                    <label class="form-check-label" for="inlineRadio1">Partido</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="Amistoso">
                    <label class="form-check-label" for="inlineRadio1">Amistoso</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="Maratòn">
                    <label class="form-check-label" for="inlineRadio1">Maratòn</label>
                  </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">GUARDAR  <i class="bi bi-floppy-fill"></i></button>
                    <a href="{{ route('home')}}" class="btn btn-light">VOLVER  <i class="bi bi-arrow-return-left"></i></a>
                </div>
            </form>
          </div>
        </div>
    </div>
    <div class="contenedor_derecha">

        <div class="card">

                <div class="card-body">
                 Estos son los eventos!
                </div>

            <table class="table">
                <thead class="table table-dark">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>FECHA</th>
                    <th>UBICACION</th>
                    <th>TIPO</th>
                    <th>Acción</th>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>UEFA BARRIOS LEAGUE</td>
                        <td>Ganara el mejor de 3!</td>
                        <td>11/02/2024</td>
                        <td>Calle # - B/Centro</td>
                        <td>Torneo</td>
                        <td><a href="{{ route('eventos.editar')}}" class="btn btn-outline-primary"> EDITAR <i class="bi bi-pen"></i></a>
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
