@extends('layouts.main-layout')
@section('head')
    <title>Automezzi</title>
@endsection
@section('content')

    <div class="container-fluid">
        {{-- ROTTA RITORNO INDIETRO --}}
        <a class="d-flex" href="{{ route('Vehicle.vehicle') }}">
            <button class="btn btn-info mx-3"><i class="fa-solid fa-arrow-left"></i></button>
        </a>
        <div class="container vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="card w-50">
                <div class="row">
                    <div class="col-6">
                        <h3>Automezzo:</h3>

                        <h6>Modello: {{ $vehicles->model }}</h6>
                        <h6>Codice: {{ $vehicles->code }}</h6>
                        <h6>Targa: {{ $vehicles->plate }}</h6>
                        <h6>Marca: {{ $vehicles->brand }}</h6>
                    </div>
                    <div class="col-6">
                        <h3>Filiale:</h3>

                        <h6>Città: {{ $vehicles->branch->city }}</h6> - <h6>CAP: {{$vehicles->branch->postalCode}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
</div>
