@extends('layouts.main-layout')
@section('head')
    <title>Creazione Automezzo</title>
@endsection
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container-fluid vh-100 d-flex align-items-center">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 slide-in-from-left">
                <div class=" form-bg">
                    <form  action="{{route('vehicle.store')}}" method="POST">

                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label class="label-style-create" for="code">Codice:</label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="Codice">
                        </div>
                        <div class="form-group">
                            <label class="label-style-create" for="plate">Targa:</label>
                            <input type="text" name="plate" id="plate" class="form-control" placeholder="Targa">
                        </div>
                        <div class="form-group">
                            <label class="label-style-create" for="brand">Marca:</label>
                            <input type="text" name="brand" id="brand" class="form-control" placeholder="Marca">
                        </div>
                        <div class="form-group">
                            <label class="label-style-create" for="model">Modello:</label>
                            <input type="text" name="model" id="model" class="form-control" placeholder="Modello">
                        </div>

                        <div class="form-group">
                            <label class="label-style-create" for="branch_id">Filiali:</label>
                            <select class="form-select" name="branch_id" id="branch_id" class="form-control">
                                @foreach ($branches as $branch)
                                    <option class="text-dark" value="{{ $branch->id }}">{{ $branch->city }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Salva</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 my-4 slide-in-from-right">
                <div class="title-form">
                    <h4>Inserisci il tuo veicolo</h4>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


