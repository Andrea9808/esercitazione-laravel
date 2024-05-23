@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<div class="container-fluid gx-0">
    <div class="bg-img-home d-flex flex-column align-items-center justify-content-center">
        <div class="text-home">
            <h3>Benvenuto! <br> Seleziona tra filiale e automezzo per scoprire tutti i dettagli personalizzati.</h3>
        </div>
        <div class="d-flex gap-4 py-4 justify-content-center">
            {{-- ROTTA PER GLI AUTOMEZZI --}}
            <a href="{{route('Vehicle.vehicle')}}">
                <button class="btn btn-info">I nostri automezzi</button>
            </a>

            {{-- ROTTA PER LE FILIALI --}}
            <a href="{{route('Branch.branch')}}">
                <button class="btn btn-info mx-3">Le nostre filiali</button>
            </a>
        </div>
    </div>
</div>




@endsection
