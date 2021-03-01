<?php

namespace App\Http\Livewire\Livro;

use App\Models\Livro;
use Livewire\Component;

class BookEdite extends Component
{
    public $livroId;
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

    public function mount(Livro $livro)
    {
        // $livro = Livro::find($livro);

        
        $this->nome    = $livro->nome;
        $this->dataPublicacao = $livro->data_publicacao;
        $this->descricao = $livro->descricao;
        $this->livroId = $livro->id;
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update()
    {
        $this->validate();
        $livro = Livro::find($this->livroId);

        $livro->update([
            'nome' => $this->nome,
            'data_publicacao' => $this->dataPublicacao,
            'descricao' => $this->descricao,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        session()->flash('menssage', 'Atualizado com sucesso');
    }

    public function render()
    {
        return view('livewire.livro.book-edite')
            ->layout('page.Livro.livro-edite');
    }
}
