<?php

namespace App\Http\Livewire\Livro;

use App\Models\Livro;
use Livewire\Component;

class BookDeleteConfirm extends Component
{
    public $livroId;

    public function mount(Livro $livro)
    {
        $this->livroId = $livro->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $record = Livro::where('id', $this->livroId);
        $record->delete();

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.livro.book-delete-confirm')
            ->layout('page.Livro.livro-deletar');
    }
}
