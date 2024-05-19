<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <h2 class="p-3 display-5">Inserisci il tuo prodotto</h2>
            <form wire:submit.prevent="create_article">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"  wire:model.blur="nome">
                    @error('nome')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Provenienza</label>
                    <input type="text" class="form-control" wire:model.blur="provenienza">
                    @error('provenienza')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model.blur="descrizione">></textarea>
                    @error('descrizione')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="text" class="form-control" wire:model.blur="prezzo">
                    @error('prezzo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category">Categoria</label>
                    <select wire:model.defer="category" id="category" class="form-control">
                        <option value="">Scegli la Categoria</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoria}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>