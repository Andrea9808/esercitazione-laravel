@extends('layouts.main-layout')
@section('head')
    <title>Creazione filiale</title>
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
                <div class=" form-bg ">
                    <div>

                        {{-- ROTTA PER LO STORE --}}
                        <form  action="{{route('branch.store')}}" method="POST">

                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label class="label-style-create" for="code">Codice:</label>
                                <input type="text" name="code" required id="code" class="form-control" placeholder="Codice">
                            </div>
                            <div class="form-group">
                                <label class="label-style-create" for="address">Indirizzo:</label>
                                <input type="text" name="address" required id="address" class="form-control" placeholder="Indirizzo">
                            </div>
                            <div class="form-group">
                                <label class="label-style-create" for="city">Città:</label>
                                <input type="text" name="city" required id="city" class="form-control" placeholder="città">
                            </div>
                            <div class="form-group">
                                <label class="label-style-create" for="postalCode">CAP:</label>
                                <input type="text" name="postalCode" required id="postalCode" class="form-control" placeholder="CAP">
                            </div>

                            <button type="submit" class="btn btn-success">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-4 slide-in-from-right">
                <div class="title-form">
                    <h4>Inserisci la tua filiale</h4>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection
