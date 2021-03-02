<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    /**
     * Undocumented variable
     */
    protected $table = "livros";

    /**
     * Undocumented variable
     */
    protected $primaryKey = "id";

    /**
     * Undocumented variable
     *
     * @var boolean
     */
    protected $guarded = [];

    /**
     * Get the Autor associated with the Livos.
     *
     * @return void
     */
    public function autor()
    {
        return $this->hasMany(Autor::class, 'livro_id');
    }

    /**
     * Get the Generos associated with the Livos.
     *
     * @return void
     */
    public function genero()
    {
        return $this->hasMany(Autor::class, 'livro_id');
    }
}
