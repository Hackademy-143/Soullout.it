<div class="container">
    <div class="row">
        <div class="col-8">
            <form wire:submit.prevent="create_article">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.blur="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Provenienza</label>
                    <input type="text" class="form-control" wire:model.blur="provenienza">

                </div>
                <div class="mb-3">
                    <label class="form-label">Descrizione</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model.blur="descrizione">></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="text" class="form-control" wire:model.blur="prezzo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
