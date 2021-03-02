<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    /**
     * Undocumented variable
     */
    protected $table = "autors";

    /**
     * Undocumented variable
     */
    protected $primaryKey = "id";

    /**
     * 
     */
    public function livro()
    {
        // return $this->hasMany('App\Models\Autor', 'livro_id');
    }
}
