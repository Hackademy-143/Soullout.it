<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateArticoli extends Component
{
    use WithFileUploads;
    public $images=[];
    public $temporary_images;


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

        'temporary_images.*.max' => 'Il peso massimo deve essere 1MB',
        'temporary_images.max' => 'Il massimo numero di immagini consentito è 6'

    ];
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function create_article(){
        $this->validate();
        $this->article = Article::create(
            [
                'nome'=> $this->nome,
                'provenienza'=> $this->provenienza,
                'descrizione'=> $this->descrizione,
                'prezzo'=> $this->prezzo,
                'user_id'=> auth()->id(),
                'category_id'=> $this->category_id,
                ]
            );

            if (count($this->images) > 0){
                foreach ($this->images as $image) {
                    $this->article->images()->create([
                        'path' => $image->store('images', 'public'),
                    ]);
                }
            }
            $this->reset();
            session()->flash('status', 'Articolo Creato');
        }
        public function render()
        {
            return view('livewire.create-articoli');
        }

        public function updatedTemporaryImages(){
            if ($this->validate([

                'temporary_images.*' => 'image|max:1024',
                'temporary_images' => 'max:6',

                ])) {
                    foreach ($this->temporary_images as $image) {
                        $this->images[] = $image;
                    }
                }
            }
            public function removeImage($key){
                if (in_array($key, array_keys($this->images))) {
                    unset($this->images[$key]);
                }
            }
        }
