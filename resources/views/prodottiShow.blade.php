<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mt-1 text-center">
                <h1 class="display-1 p-3">Prodotti</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 my-4">
                <div class="card shadow">
                    <img class="card-img-top" src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200'}}" alt="foto dell'articolo {{$article->nome}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->nome}}</h5>
                        <p class="card-text">{{$article->provenienza}}</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <p class="card-text">{{$article->prezzo}}</p>
                        <a href="{{route('categoryDet', $article)}}" class="btn btn-success shadow">Visualizza Dettaglio</a>
                        <a href="{{ route('categoryShow',$article->category) }}" class="btn btn-success shadow my-5"> Categoria: {{$article->category->categoria}}</a>
                        <p class="">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>