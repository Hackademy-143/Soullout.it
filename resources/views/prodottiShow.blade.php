<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 text-center">
            <h1>Prodotti</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-12 col-md-4 my-4">
                <div class="card shadow">
                    <img class="card-img-top" src="https://picsum.photos/200" alt="foto dell'articolo">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->nome}}</h5>
                        <p class="card-text">{{$article->provenienza}}</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <p class="card-text">{{$article->prezzo}}</p>
                        <a href="" class="btn btn-success shadow">Visualizza Dettaglio</a>
                        <a href="" class="btn btn-success shadow my-5"> Categoria: {{$article->category->categoria}}</a>
                        <p class="">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>