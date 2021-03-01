<?php

namespace App\Http\Livewire;

use App\Models\Autor;
use Livewire\Component;

class AutorCreate extends Component
{
    public $name;
    public $email;
    
    public function saveContact()
    {
        dd("asdadasdasd");
    }

    

    public function render()
    {
        return view('livewire.autor-create');
    }
}
