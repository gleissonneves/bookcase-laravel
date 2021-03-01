<?php

namespace App\Http\Livewire\Livro;

use App\Models\Livro;
use Livewire\Component;

class BookListCard extends Component
{
    public function render()
    {
        return view('livewire.livro.book-list-card',
        [
            'books' => Livro::all(), 
        ])->layout('main');
    }
}
