<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateArticoli extends Component
{
    #[Validate('required|min:5')]
    public $nome;
    #[Validate('required|min:3')]
    public $provenienza;
    #[Validate('required|min:10|max:50')]
    public $descrizione;
    #[Validate('required|min:1')]
    public $prezzo;
    #[Validate('required')]
    public $category_id;

    protected $messages = [
        'nome.min' => 'Il nome è troppo corto',
        'provenienza.min' => 'Inserire una città valida',
        'descrizione.min' => 'Inserire una descrizione del prodotto',
        'prezzo.min' => 'Inserire il prezzo del prodotto',
        'category' => 'La categoria è richiesta',
    ];
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function create_article(){
        $this->validate();
        Article::create(
            [
                'nome'=> $this->nome,
                'provenienza'=> $this->provenienza,
                'descrizione'=> $this->descrizione,
                'prezzo'=> $this->prezzo,
                'user_id'=> auth()->id(),
                'category_id'=> $this->category_id,
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
