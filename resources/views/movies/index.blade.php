@extends('layouts.main')

@section('main-content')
<section id="movies-list">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 my-5">
            @forelse ($movies as $movie)
            <div class="col p-3">
                <div class="card bg-dark text-white h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->nationality }}</h6>
                        <p class="card-text">{{ $movie->date }}</p>
                        <p class="card-text"><strong>Rating: </strong>{{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
            @empty
            <h3>Nessun film disponibile</h3> 
            @endforelse
        </div>
    </div>
</section>

@endsection