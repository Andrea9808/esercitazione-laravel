@extends('layouts.main-layout')
@section('head')
    <title>{{$branches->city}}</title>
@endsection
@section('content')

<div class="container-fluid">
    {{-- ROTTA RITORNO INDIETRO --}}
    <a class="d-flex" href="{{route('Branch.branch')}}">
        <button class="btn btn-info  mx-3"><i class="fa-solid fa-arrow-left"></i></button>
    </a>
    <div class="container vh-100 w-100 d-flex align-items-center justify-content-center">

        <div class="card w-50">
            <div class="row">
                <div class="col-6">
                    <h3>Automezzi:</h3>
                    {{--CICLO GLI AUTOMEZZI PER OGNI FILIALE  --}}
                    @foreach ($branches->vehicles as $vehicle)
                        <h6>{{$vehicle->model}}</h6>
                    @endforeach
                </div>
                <div class="col-6">
                    <h3>Filiale:</h3>
                    <h6>Codice filiale: {{$branches->code}}</h6>
                    <h6>Indirizzo: {{$branches->address}}</h6>
                    <h6>Città: {{$branches->city}}</h6>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>

