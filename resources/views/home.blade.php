@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row row-cols-2 row-cols-sm-4">
            @foreach ($movies as $movie)
            
                <div class="col">
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <p class="card-text">
                                    <p>Original title: {{ $movie->original_title}}</p>
                                    <p>Vote: {{ $movie->vote }}</p>
                                    <p>Nationality: {{ $movie->nationality }}</p>
                                    <p>Released: {{ $movie->date }}</p>
                                </p>
                            </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>

@endsection