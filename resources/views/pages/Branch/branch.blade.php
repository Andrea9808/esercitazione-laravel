@extends('layouts.main-layout')
@section('head')
    <title>Filiali</title>
@endsection
@section('content')

<div class="container-fluid bg-home-branches">
    <div class="container hv-100 d-flex align-items-center justify-content-center flex-column">
        <h1 class="mb-5">Tutte le nostre filiali</h1>

        {{-- ROTTA PER LA CREATE --}}
        <a href="{{route('branch.create')}}">
            <button class="btn btn-success mb-4 ">Inserisci una filiale</button>
        </a>
        <div class="row">
            @foreach ($branches as $branch)
                <div class="col-12 col-md-6 mb-4">
                    {{-- ROTTA PER FILIALE --}}
                    <a class="link-route" href="{{route('branch.show', $branch ->id)}}">
                        <div class="card">
                            <h6>Città: {{$branch ->city}}</h6>
                            <h6>CAP: {{$branch->postalCode}}</h6>
                        </div>
                    </a>

                    {{-- ROTTA DELETE --}}
                    <form id="deleteForm_{{$branch->id}}" action="{{route('branch.destroy', $branch->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="showConfirmationModal('{{ $branch->id }}')">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                    {{-- MODALE DI CONFERMA --}}
                    <div class="modal fade" id="confirmationModal_{{ $branch->id }}" tabindex="-1" aria-labelledby="confirmationModalLabel_{{ $branch->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmationModalLabel_{{ $branch->id }}">Attenzione</h5>
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>
                                        Sei sicuro di voler eliminare la filiale sita in "{{ $branch->city }}"?
                                        Nel caso di eliminazione, non sarà possibile recuperare i dati e verranno cancellati tutti
                                        i veicoli associati.
                                    </h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                    <button type="button" class="btn btn-danger" onclick="submitDeleteForm('{{ $branch->id }}')">Elimina</button>
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
        document.getElementById('deleteForm_' + id).submit();
    }
</script>
