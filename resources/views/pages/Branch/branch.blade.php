@extends('layouts.main-layout')
@section('head')
    <title>Filiali</title>
@endsection
@section('content')

<div class="container vh-100 d-flex align-items-center justify-content-center flex-column">
    <h1>Tutte le nostre filiali</h1>
    <div class="row">
        @foreach ($branches as $branch)
            <div class="col-12 col-md-6">
                <a href="{{route('branch.show', $branch ->id)}}">
                    <div class="card">
                        <h6>Città: {{$branch ->city}}</h6> - <h6>CAP: {{$branch->postalCode}}</h6>
                    </div>
                </a>
            </div>
        @endforeach
        <a class="link-home" href="{{route('home')}}">Ritorna alla Home</a>
    </div>
</div>

@endsection

<style>

</style>
