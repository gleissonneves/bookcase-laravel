<?php

namespace App\Http\Livewire\Livro;

use App\Models\Livro;
use Livewire\Component;

class BookCreate extends Component
{
    public $nome;
    public $descricao;
    public $imgCapa;


    protected function rules()
    {
        return [
            'nome' => 'required|min:2',
            'descricao' => 'required',
        ];
    }

    /**
     * creating a new resource.
     *
     */
    public function create()
    {
        $this->validate();

        Livro::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'img_capa' => $this->imgCapa,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $this->nome = $this->imgCapa = $this->descricao = null;

        return redirect()->to('/');
    }

    /**
     * Show the component book create form for creating a new resource.
     * 
     */
    public function render()
    {
        return view('livewire.livro.book-create')
            ->layout('page.Livro.livro-criar');
    }
}
