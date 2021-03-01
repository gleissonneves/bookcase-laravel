<?php

namespace App\Http\Livewire\Livro;

use App\Models\Livro;
use Livewire\Component;

class BookCreate extends Component
{
    public $nome;
    public $dataPublicacao;
    public $descricao;


    protected function rules()
    {
        return [
            'nome' => 'required|min:2',
            'dataPublicacao' => 'required|min:10|max:10',
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
            'data_publicacao' => $this->dataPublicacao,
            'descricao' => $this->descricao,
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        $this->nome = $this->dataPublicacao = $this->descricao = null;

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
