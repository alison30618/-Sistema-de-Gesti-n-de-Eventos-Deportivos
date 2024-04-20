@extends('components.content')


@section('title', 'Inicio')

@section('css')

@vite(['resources/css/welcome.css'])
@endsection

@section('content')


<div class="contenedor_principal">
    <div class="card" style="width: 18rem;">
        <img src="https://www.elitefts.com/wp/wp-content/uploads/2020/07/68568316_l-800x533.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Eventos </h5>
          <a href="{{route('eventos') }}" class="btn btn-danger">Ir <i class="bi bi-controller"></i></a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://thumbs.dreamstime.com/b/multi-sports-proud-players-collage-grand-arena-boxing-soccer-football-basketball-volleyball-83596268.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Equipos</h5>

          <a href="{{route('equipos') }}" class="btn btn-danger">Ir <i class="bi bi-people-fill"></i></a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://th.bing.com/th/id/OIP.3dIQq-w0N9LH5GVTsQGxFgAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Participantes</h5>

          <a href="{{route('participantes') }}" class="btn btn-danger">Ir <i class="bi bi-person-video2"></i></a>
        </div>
      </div>
</div>

@endsection


@section('js')

@endsection
