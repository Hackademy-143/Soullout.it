<?php

namespace App\Livewire;

use Livewire\Component;

class CreateArticoli extends Component
{
    public $nome;
    public $provenienza;
    public $descrizione;
    public $prezzo;

    public function create_article(){
        Annunci::create(
            [
                'nome'=> $this->nome,
                'provenienza'=> $this->provenienza,
                'descrizione'=> $this->descrizione,
                'prezzo'=> $this->prezzo
            ]  
        );  
    }

    public function render()
    {
        return view('livewire.create-articoli');
    }
}
