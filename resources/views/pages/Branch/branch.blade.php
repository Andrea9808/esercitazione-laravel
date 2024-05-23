@extends('layouts.main-layout')
@section('head')
    <title>Filiali</title>
@endsection
@section('content')

<div class="container-fluid bg-home-branches">
    <div class="container h-100 d-flex align-items-center justify-content-center flex-column">
        <h1 class="mb-5">Tutte le nostre filiali</h1>
        <div class="row">
            @foreach ($branches as $branch)
                <div class="col-12 col-md-6 mb-4">

                    {{-- ROTTA PER FILIALE --}}
                    <a class="link-route" href="{{route('branch.show', $branch ->id)}}">
                        <div class="card">
                            <h6>Città: {{$branch ->city}}</h6> - <h6>CAP: {{$branch->postalCode}}</h6>
                        </div>
                    </a>
                </div>
            @endforeach

            {{-- ROTTA HOME --}}
            <div>
                <a class="btn btn-info m-5" href="{{route('home')}}">Ritorna alla Home</a>
            </div>
        </div>
    </div>
</div>


@endsection

