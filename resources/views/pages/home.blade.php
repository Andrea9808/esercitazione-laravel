@extends('layouts.main-layout')
@section('head')
    <title>Filiali</title>
@endsection
@section('content')

<div>
    <a href="{{route('Vehicle.vehicle')}}">
        <button class="btn btn-info">I nostri automezzi</button>
    </a>
    <a href="{{route('Branch.branch')}}">
        <button class="btn btn-info">Le nostre filiali</button>
    </a>
</div>

@endsection
