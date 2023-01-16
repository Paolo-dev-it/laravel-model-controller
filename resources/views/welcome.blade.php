@extends('layouts.app')

@section('title-page', 'Movies-Home')

@section('main-content')

    {{-- @foreach ($movies_all as $elem)
        <div class="container">
            <div class="card-cont">
                <h2>{{ $elem->title }}</h2>
                <h3>Titolo originale: {{ $elem->original_title }}</h3>
                <h3>Lingua: {{ $elem->nationality }}</h3>
                <h4>Data di rilascio: {{ $elem->date }}</h4>
                <h4>Voto: {{ $elem->vote }}</h4>
            </div>

        </div>
    @endforeach --}}


    <div class="container">
        <div class="row">
            @foreach ($movies_all as $elem)
                <div class="col-4">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="card-title">{{ $elem->title }}</h2>
                            <h3>{{ $elem->original_title }}</h3>
                            <h5>Lingua: {{ $elem->nationality }}</h5>
                            <h5>Data di rilascio: {{ $elem->date }}</h5>
                            <h5>Voto: {{ $elem->vote }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection
