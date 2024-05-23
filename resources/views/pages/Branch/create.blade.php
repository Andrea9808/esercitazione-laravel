@extends('layouts.main-layout')
@section('head')
    <title>Creazione filiale</title>
@endsection
@section('content')


<div class="container">
    <form action="{{route('branch.store')}}" method="POST">

        @csrf
        @method('POST')

        <div class="form-group">
            <label for="code">Codice:</label>
            <input type="text" name="code" id="code" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Indirizzo:</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="city">Città:</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>
        <div class="form-group">
            <label for="postalCode">CAP:</label>
            <input type="text" name="postalCode" id="postalCode" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
    </form>
</div>

@endsection
