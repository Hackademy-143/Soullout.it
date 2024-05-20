<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 mb-5 mt-5">Dettaglio</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2 mb-5">
        <div class="row justify-content-center">
            <div class="col-4 d-flex text-center flex-column justify-content-center">
                <h2>Nome del prodotto: {{$article->nome}}</h2>
                <h4>Provenienza : {{$article->provenienza}}</h4>
                <p>Descrizione : {{$article->descrizione}}</p>
                <p class="bold">Venditore : {{$article->user->name}}</p>
                <a href="" class="btn btn-success shadow my-5"> Categoria: {{$article->category->categoria}}</a>
            </div>
            <div class="col-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200" class="img-fluid w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200" class="img-fluid w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200" class="img-fluid w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </x-layout>