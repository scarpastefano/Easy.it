<x-main>

<div>

    <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">Lavora con noi</h1>
                        <p class="lead fw-light text-50 mb-4">Inserisci i dati e invia la tua richiesta</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container my-5 py-5 d-flex justify-content-center">
        <div class="col-12 border-2 bg-white p-5 rounded-4" style="width: 1000px"> 
            <a class="nav-link text-primary rounded-5 mb-5" href="{{route('homepage')}}"><i class="bi bi-arrow-left-short me-2"></i>Torna indietro</a>
        
        
        
        <form wire:submit="store">
            <h3 class="h3   mt-5 pt-3">Lavora con noi</h3>
            <p class="mb-4 fw-light">Compila il form e inviaci la tua richiesta</p>
    
            <div class="row">
            
                    {{-- input titolo --}}
                    <div class="form-floating mb-4 col">
                        <input class="form-control border-2" value="" wire:model.blur="Nome" type="text" id="Nome">
                        <label class="ms-2" for="Nome">Nome</label>
                       
                    </div>
    
                    {{-- input prezzo --}}
                    <div class="form-floating mb-4 col">
                        <input class="form-control border-2" value="" wire:model.blur="email" id="email"></input>
                        <label class="ms-2" for="email">Email</label>
                       
                    </div>
    
            </div>
    
            {{-- input descrizione --}}
            <div class="form-floating mb-5">
                <textarea class="form-control border-2" wire:model.blur="description" style="height: 180px" rows="5"></textarea>
                <label for="description" id="description">Inserisci una descrizione...</label>
                
            </div>
           
           <div class="col-md-5 offset-md-1 mb-3 text-center">
                <h5>Vuoi diventare revisore?</h5>
                <p>cliccando il bottone sottostante farai richiesta al nostro admin</p>
                <a href="{{ route('become.revisor')}}" class="btn btn-success">diventa revisore</a>

           </div>
                
       
    
        
    
           
              
{{--     
            <div class="d-grid d-flex justify-content-center">
                <button class="btn btn-dark rounded-3 mb-5 px-5 py-2" type="submit">Invia</button>
            </div> --}}
    
        </form>
    </div>
    </div>
    </div>
</x-main>