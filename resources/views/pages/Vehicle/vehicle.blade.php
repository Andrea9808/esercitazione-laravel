@extends('layouts.main-layout')
@section('head')
    <title>Automezzi</title>
@endsection
@section('content')

<div class="container-fluid bg-home-vehicles">
    <div class="container hv-100 d-flex align-items-center justify-content-center flex-column">
        <h1 class="mb-5">Tutti i nostri Automezzi</h1>

        {{-- ROTTA PER LA CREATE --}}
        <a href="{{route('vehicle.create')}}">
            <button class="btn btn-success mb-4 ">Inserisci un automezzo</button>
        </a>

        <div class="row">
            @foreach ($vehicles as $vehicle)
                <div class="col-12 col-md-6 mb-4">
                    {{-- ROTTA PER LA SHOW --}}
                    <a class="link-route" href="{{route('vehicle.show', $vehicle ->id)}}">
                        <div class="card">
                            <h6>Modello: {{$vehicle ->model}}</h6>
                        </div>
                    </a>

                     {{-- ROTTA DELETE --}}
                    <form id="deleteForm_{{$vehicle->id}}" action="{{route('vehicle.destroy', $vehicle->id)}}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="button" class="btn btn-danger" onclick="showConfirmationModal('{{ $vehicle->id }}')">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                    </form>

                    {{-- MODALE DI CONFERMA --}}
                    <div class="modal fade" id="confirmationModal_{{ $vehicle->id }}" tabindex="-1" aria-labelledby="confirmationModalLabel_{{ $vehicle->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmationModalLabel_{{ $vehicle->id }}">Attenzione</h5>
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>
                                        Sei sicuro di voler eliminare il modello "{{ $vehicle->model }}"?
                                        Nel caso di eliminazione, non sarà possibile recuperare i dati.
                                    </h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                    <button type="button" class="btn btn-danger" onclick="submitDeleteForm('{{ $vehicle->id }}')">Elimina</button>
                                </div>
                            </div>
                        </div>
                    </div>
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

<script>
    function showConfirmationModal(id) {
        $('#confirmationModal_' + id).modal('show');
    }

    function submitDeleteForm(id) {
        $('#deleteForm_' + id).submit();
    }
</script>
