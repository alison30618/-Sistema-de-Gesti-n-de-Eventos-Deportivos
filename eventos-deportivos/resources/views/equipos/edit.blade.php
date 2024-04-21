@extends('components.content')


@section('title', 'Equipos')

@section('css')

@vite(['resources/css/equipos.css'])
@endsection

@section('content')

<br>
<div class="contenedor_principal">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="mb-3">
                    <h1>Editar equipo</h1>
                    <hr>
                     <label for="exampleFormControlInput1" class="form-label">ID
                     </label>
                     <input required readonly type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un nombre" value="1">
                   </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre
                </label>
                <input required type="text" name="nombre"  class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un nombre" value="Adrian FC">
              </div>

              <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Deporte
                 </label>
                 <input required type="text" name="deporte" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un deporte" value="Futbol">
               </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Entrenador
                </label>
                <input required type="text" name="entrenador" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un Entrenador" value="Leonardo Dagua">
            </div>
            <div class="mb-3">
                <button class="btn btn-success">GUARDAR  <i class="bi bi-floppy-fill"></i></button>
                <a href="{{ route('equipos')}}" class="btn btn-light">VOLVER  <i class="bi bi-arrow-return-left"></i></a>
            </div>
        </form>
          </div>
        </div>
    </div>



</div>

@endsection


@section('js')

@endsection
