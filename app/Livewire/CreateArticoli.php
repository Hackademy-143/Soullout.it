<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;



class CreateArticoli extends Component
{
    #[Validate('required|min:5')]
    public $nome;
    #[Validate('required|min:5')]
    public $provenienza;
    #[Validate('required|min:5|max:50')]
    public $descrizione;
    #[Validate('required|min:5')]
    public $prezzo;
    #[Validate('required|min:5')]
    public $category;

    protected $messages = [
        'nome.min' => 'Il nome è troppo corto',
    ];
    // public function updated($propertyName){
    //     $this->validateOnly($propertyName);
    // }

    public function create_article(){
        // $this->validate();
        Article::create(
            [
                'nome'=> $this->nome,
                'provenienza'=> $this->provenienza,
                'descrizione'=> $this->descrizione,
                'prezzo'=> $this->prezzo,
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
