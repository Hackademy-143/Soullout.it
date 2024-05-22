<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="display-1 fw-bold text-center p-5">SoullOut</h1>
            @if (session()->has('errorMessage'))
            <div class="alert-danger alert text-center w-50 rounded shadow">
                {{session('errorMessage')}}
            </div>
        @endif
            <div class="col-12 text-center italymap">
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mt-3 mb-3 p-3">I prodotti più recenti</h2>
        <div class="row justify-content-center p-2">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 my-4">
                <div class="card shadow">
                    <img class="card-img-top" src="https://picsum.photos/200" alt="foto dell'articolo">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->nome}}</h5>
                        <p class="card-text">{{$article->provenienza}}</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <p class="card-text">€ {{$article->prezzo}}</p>
                        <a href="{{route('categoryDet', $article)}}" class="btn btn-success shadow">Visualizza Dettaglio</a>
                        <a href="" class="btn btn-success shadow my-4"> Categoria: {{$article->category->categoria}}</a>
                        <p class="">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</x-layout>