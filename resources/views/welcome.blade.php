<x-layout>
    <div class="container-fluid bgpers mt-5">
        <div class="row justify-content-center">
            <h1 class="display-3 fw-bold text-center pt-5">SoullOut</h1>
            @if (session()->has('errorMessage'))
                <div class="alert-danger alert text-center rounded shadow">
                    {{ session('errorMessage') }}
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert-success alert text-center rounded shadow">
                    {{ session('message') }}
                </div>
            @endif
            <div class="col-12 text-center italymap">
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mt-3 mb-3 p-3">{{ __('ui.home1') }} </h2>
        <div class="row justify-content-between p-2">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 mx-4">
                    <div data-aos="flip-left">
                        <div class="card shadow">
                            <img class="card-img-top card-imgpers "
                                src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(600, 600) : 'https://picsum.photos/200' }}"
                                alt="foto dell'articolo {{ $article->nome }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->nome }}</h5>
                                <p class="card-text">{{ $article->provenienza }}</p>
                                <p class="card-text">{{ $article->descrizione }}</p>
                                <p class="card-text">€ {{ $article->prezzo }}</p>
                                <a href="{{ route('categoryDet', $article) }}" class="btn btn-success shadow">
                                    {{ __('ui.details') }}</a>
                                <a href="{{ route('categoryShow', $article->category) }}"
                                    class="btn btn-success shadow my-4"> {{ $article->category->categoria }}</a>
                                <p class="">{{ __('ui.published') }}:
                                    {{ $article->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
