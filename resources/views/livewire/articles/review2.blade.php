<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif



    @if ($article)

    <div class="row justify-content-center pt-5">
        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-6 col-md-4 mb-4 text-center">
                        <img src="https://picsum.photos/300"
                        class="img-fluid rounded shadow" alt="immagine segnaposto">

                    </div>

                @endfor

            </div>
        </div>
    </div>

        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <h1>{{ $article->title}}</h1>
                <h3>Autore: {{ $article->user->name}}</h3>
                <h4>{{ $article->price}}€</h4>
                <h4 class="fst-italic text-muted">#{{ $article->category->name }}</h4>
                <p class="h6">{{ $article->description }}</p>
            </div>

            <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                <div class="d-flex pb-4 justify-content-around">
                    <button wire:click="openModal('reject')" class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    <button wire:click="openModal('accept')" class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                </div>
            </div>
        </div>

        <!-- Bootstrap Modal -->
        <div class="modal fade @if($showModal) show @endif" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="@if($showModal) false @else true @endif" @if($showModal) style="display: block;" @endif>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Conferma azione</h5>
                        <button type="button" class="close" wire:click="closeModal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler {{ $actionType === 'accept' ? 'accettare' : 'rifiutare' }} questo articolo?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Annulla</button>
                        <button type="button" class="btn btn-primary" wire:click="confirmAction">Conferma</button>
                    </div>
                </div>
            </div>
        </div>
        @if($showModal)
            <div class="modal-backdrop fade show"></div>
        @endif
    @else
        <div class="row justify-content-center align-items-center height-custom text-center">
            <div class="col-12">
                <h1 class="fst-italic display-4">
                    Nessun articolo da revisionare
                </h1>
                <a href="{{ route('homepage')}}" class="mt-5 btn btn-success">Torna all'Homepage</a>
            </div>
        </div>
    @endif
</div>
