<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-5 text-center p-5">Revisor dashboard</h1>
                @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-12 alert alert-success text-center shadow rounded">
                        {{session('message')}}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @if($article_to_check)
    <div class="container">
        <div class="row justify-content-center">
            @if ($article_to_check->images->count())
            @foreach ($article_to_check->images as $key => $image)
            <div class="col-6 col-md-4 mb-3">
                <img src="{{Storage::url($image->path) }}" class="img-fluid rounded shadow" alt="Immagine {{$key +1}} dell'articolo ' {{$article_to_check->nome}} ">
            </div>
            @endforeach
            @else
            @for ($i=0; $i<3; $i++)
            <img src="https://picsum.photos/200" class="img-fluid rounded shadow imgindex " alt="immagine segnaposto">
            @endfor
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-3 ">
            <div class="col-6 d-flex flex-column text-center justify-content-center">
                <div>
                    <h1>{{$article_to_check->nome}}</h1>
                    <h3>Venditore: {{$article_to_check->user->name}}</h3>
                    <h4>{{$article_to_check->prezzo}}€</h4>
                    <h4 class="fst-italic text-muted">#{{$article_to_check->category->categoria}}</h4>
                    <p class="h6">{{$article_to_check->descrizione}}</p>
                </div>
                <div class="d-flex pb-4 justify-content-around ">
                    <form action="{{route('reject', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    <form action="{{route('accept', ['article'=> $article_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@else
<div class="row justify_content_center align-items-center height-custom text-center">
    <div class="col-12">
        <h1 class="fst-italic display-4">Nessun articolo da revisionare</h1>
        <a href="{{route('welcome')}}" class="mt-5 btn btn-success">Torna alla Home</a>
    </div>
</div>
@endif
</div>
</x-layout>