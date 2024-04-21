@extends('components.content')


@section('title', 'Participantes')

@section('css')

@vite(['resources/css/participantes.css'])
@endsection

@section('content')

<br>
<div class="contenedor_principal">

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

                     <option value="1">UEFA BARRIOS LEAGUE</option>
                   </select>
                   </div>
                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Equipo
                     </label>
                     <select class="form-select" aria-label="Default select example">

                      <option value="1">Adrian FC</option>
                    </select>
                   </div>
                   <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Resultado
                     </label>
                     <input required type="number" name="resultado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un resultado" value="7">
                 </div>

                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Premios
                     </label>
                     <input required type="number" name="premios" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese los premios" value="2">
                 </div>
            <div class="mb-3">
                <button class="btn btn-success">GUARDAR  <i class="bi bi-floppy-fill"></i></button>
                <a href="{{ route('participantes')}}" class="btn btn-light">VOLVER  <i class="bi bi-arrow-return-left"></i></a>
            </div>
        </form>
          </div>
        </div>
    </div>



</div>

@endsection


@section('js')

@endsection
