<?php

namespace App\Http\Livewire\Livro;

use App\Models\Livro;
use Livewire\Component;

class BookEdite extends Component
{
    public $livroId;
    public $nome;    
    public $descricao;
    public $imgCapa;

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
        $this->nome      = $livro->nome;
        $this->descricao = $livro->descricao;
        $this->imgCapa   = $livro->img_capa;
        $this->livroId   = $livro->id;
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
            'descricao' => $this->descricao,
            'img_capa' => $this->imgCapa,
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
