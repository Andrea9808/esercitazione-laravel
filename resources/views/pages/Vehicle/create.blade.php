@extends('layouts.main-layout')
@section('head')
    <title>Creazione Automezzo</title>
@endsection
@section('content')


<div class="container">
    <form action="{{route('vehicle.store')}}" method="POST">

        @csrf
        @method('POST')

        <div class="form-group">
            <label for="code">Codice:</label>
            <input type="text" name="code" id="code" class="form-control">
        </div>
        <div class="form-group">
            <label for="plate">Targa:</label>
            <input type="text" name="plate" id="plate" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Marca:</label>
            <input type="text" name="brand" id="brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="model">Modello:</label>
            <input type="text" name="model" id="model" class="form-control">
        </div>

        <div class="form-group">
            <label for="branch_id">Filiali:</label>
            <select name="branch_id" id="branch_id" class="form-control">
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->city }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
    </form>
</div>

@endsection
