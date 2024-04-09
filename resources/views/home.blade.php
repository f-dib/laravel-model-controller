@extends('layouts/app')


@section('content')
    <div class="container-xl py-5 text-center">
        <h1 class="pb-5 text-danger">MY MOVIE DATABASE</h1>

        <div class="d-flex flex-wrap my_grid">
            @foreach($movies as $movie)
                <div class="my_card card rounded-4 overflow-hidden">
                    <img src="{{ $movie->image }}" alt="">
                    <div class="p-4">
                        <h3 class="text-danger align-self-center">
                            {{$movie->title}}
                        </h3> 
                        <div>
                            <span class="text-danger">Titolo Originale</span>
                            {{$movie->original_title}}
                        </div>
                        <div>
                            <span class="text-danger">Voto</span>
                            {{$movie->vote}}
                        </div>   
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection