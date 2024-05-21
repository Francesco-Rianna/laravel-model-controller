@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="d-flex flex-wrap gap-3">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <img src="https://thumbs.dreamstime.com/z/modello-di-progettazione-film-banner-sfondo-cinema-concetto-con-popcorn-filmstrip-e-pellicola-colore-giallo-pop-corn-clapper-su-255545163.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$movie ->title}}</h5>
                </div>
            </div>
        @endforeach
    </div>
              

</div>

      

@endsection