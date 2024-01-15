@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Ecco i film presenti nel database</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ $movie->image }}" class="card-img-top" alt="{{ $movie->tile }}">
                        <div class="card-body">
                            <h4 class="card-title">
                                <span class="fw-bold">Title : </span>
                                <span class="fst-italic">{{ $movie->title}}</span>
                            </h4>
                            <h5 class="card-title">
                                <span class="fw-bold">Original Title : </span> 
                                <span class="fst-italic">{{ $movie->original_title}}</span>
                            </h5>
                            <p class="card-text">
                                <span class="fw-bold">Nationality :</span>
                                <span class="fst-italic">{{ $movie->nationality}}</span> 
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Date :</span> 
                                <span class="fst-italic">{{ $movie->date}}</span>
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Vote:</span> 
                                <span class="fst-italic">{{ $movie->vote}}</span>
                            </p>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection