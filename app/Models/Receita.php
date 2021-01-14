<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;

    public function produtos() {
        return $this->belongsToMany(Produto::class, 'produto_receitas')->withPivot('quantidade');
    }
}
