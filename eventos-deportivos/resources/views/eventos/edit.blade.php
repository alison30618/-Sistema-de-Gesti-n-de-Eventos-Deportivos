@extends('components.content')


@section('title', 'Eventos')

@section('css')

@vite(['resources/css/eventos.css'])
@endsection

@section('content')

<br>
<div class="contenedor_principal">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="mb-3">
                    <h1>Editar evento</h1>
                    <hr>
                     <label for="exampleFormControlInput1" class="form-label">ID
                     </label>
                     <input required readonly type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un nombre" value="1">
                   </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre
                </label>
                <input required type="text" name="nombre"  class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un nombre" value="UEFA BARRIOS LEAGUE">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                <textarea name="descripcion"  required class="form-control" id="exampleFormControlTextarea1" rows="3">Ganara el mejor de 3!</textarea>
              </div>

              <div  class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha</label>
               <input type="date"  name="fecha"  class="form-control" value="2024-02-11">
            </div>
              <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Ubicación
                 </label>
                 <input required type="text" name="ubicacion" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese una ubicación" value="Calle # - B/Centro">
               </div>
               <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="tipo">
                <label class="form-check-label" for="inlineRadio1">Torneo</label>
              </div>
              <div class="form-check form-check-inline">
                <input checked class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="tipo">
                <label class="form-check-label" for="inlineRadio1">Partido</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="tipo">
                <label class="form-check-label" for="inlineRadio1">Amistoso</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="tipo">
                <label class="form-check-label" for="inlineRadio1">Maratòn</label>
              </div>
              <hr>
            <div class="mb-3">
                <button class="btn btn-success">GUARDAR  <i class="bi bi-floppy-fill"></i></button>
                <a href="{{ route('eventos')}}" class="btn btn-light">VOLVER  <i class="bi bi-arrow-return-left"></i></a>
            </div>
        </form>

          </div>
        </div>
    </div>



</div>

@endsection


@section('js')

@endsection
