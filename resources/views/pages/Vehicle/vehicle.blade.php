@extends('layouts.main-layout')
@section('head')
    <title>Automezzi</title>
@endsection
@section('content')

<div class="container-fluid bg-home-vehicles">
    <div class="container h-100 d-flex align-items-center justify-content-center flex-column">
        <h1 class="mb-5">Tutti i nostri Automezzi</h1>
        <div class="row">
            @foreach ($vehicles as $vehicle)
                <div class="col-12 col-md-6 mb-4">
                    {{-- ROTTA PER LA SHOW --}}
                    <a class="link-route" href="{{route('vehicle.show', $vehicle ->id)}}">
                        <div class="card">
                            <h6>Modello: {{$vehicle ->model}}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
            <div>
                <a class="btn btn-info m-5" href="{{route('home')}}">Ritorna alla Home</a>
            </div>
        </div>
    </div>
</div>

@endsection
