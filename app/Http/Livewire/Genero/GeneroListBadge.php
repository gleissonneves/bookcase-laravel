<?php

namespace App\Http\Livewire\Genero;

use App\Models\Genero;
use Livewire\Component;

class GeneroListBadge extends Component
{
    public function render()
    {
        return view('livewire.genero.genero-list-badge',
        [
            'generos' => Genero::all(),
        ]);
    }
}
