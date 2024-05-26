<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1 p-3" >Esplora la categoria #{{$category->categoria}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($category->articles as $article)
                    <div class="col-12 col-md-4 my-4">
                        <div class="card-shadow card1">
                            <div class="card-body">
                                <img class="card-img-top card-imgpers" src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200'}}" alt="foto dell'articolo {{$article->nome}}">
                                <h5 class="card-title">{{$article->nome}}</h5>
                                <p class="card-text">{{$article->provenienza}}</p>
                                <p class="card-text">{{$article->descrizione}}</p>
                                <p class="card-text">{{$article->price}}</p>
                                <a href="{{route('categoryDet', $article)}}" class="btn btn-success ">Visualizza</a>
                                <p class="my-2"> Pubblicato il: {{$article->created_at->format('d/m/Y')}}
                                <br>Venditore : {{$article->user->name ?? ' ' }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p > Non sono presenti annunci per questa categoria! </p>
                        <p > Pubblicane uno: <a href="{{ route('article.create') }}
                            " class="btn btn-success">Nuovo annuncio</a></p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layout>