<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <h1 class="p-3 display-4">Inserisci il tuo prodotto</h1>
            <div class="mb-3">
                <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
                @error('temporary_images.*')
                <p class="fst-italic text-danger">{{$message}}</p>
                @enderror
                @error('temporary_images')
                <p class="fst-italic text-danger">{{$message}}</p>
                @enderror
            </div>
            @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Photo preview:</p>
                    <div class="row border border-4 border-success rounded shadow py-4">
                        @foreach($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded"
                            style="background-image: url({{ $image->temporaryUrl() }});"></div>
                            <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">X</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <form wire:submit.prevent="create_article">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control"  wire:model.blur="nome">
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
                    <select wire:model.defer="category_id" id="category" class="form-control">
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