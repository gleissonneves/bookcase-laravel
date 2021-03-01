<?php

namespace App\Http\Livewire\Autor;

use App\Models\Autor;
use Livewire\Component;

class AutorListCard extends Component
{
    public function render()
    {
        return view('livewire.autor.autor-list-card', [
            'autors' => Autor::all(),
        ]);
    }
}
