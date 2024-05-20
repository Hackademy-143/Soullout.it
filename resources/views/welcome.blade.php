<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 mt-3 text-center italymap">
                <h1 class=" fw-bold">SoullOut</h1>
                {{-- <div class="italymap">
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 my-4">
                <div class="card shadow">
                    <img class="card-img-top" src="https://picsum.photos/200" alt="foto dell'articolo">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->nome}}</h5>
                        <p class="card-text">{{$article->provenienza}}</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <p class="card-text">{{$article->prezzo}}</p>
                        <a href="{{route('categoryDet', $article)}}" class="btn btn-success shadow">Visualizza Dettaglio</a>
                        <a href="" class="btn btn-success shadow my-5"> Categoria: {{$article->category->categoria}}</a>
                        <p class="">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>