<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookCreate extends Component
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $name;


    /**
     * 
     */
    public function render()
    {
        return view('livewire.book-create');
    }
}
