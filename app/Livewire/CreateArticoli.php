<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;



class CreateArticoli extends Component
{
    public $nome;
    public $provenienza;
    public $descrizione;
    public $prezzo;

    public function create_article(){
        Article::create(
            [
                'nome'=> $this->nome,
                'provenienza'=> $this->provenienza,
                'descrizione'=> $this->descrizione,
                'prezzo'=> $this->prezzo
            ]
        );
        $this->reset();
        session()->flash('status', 'Articolo Creato');
    }

    public function render()
    {
        return view('livewire.create-articoli');
    }
}
