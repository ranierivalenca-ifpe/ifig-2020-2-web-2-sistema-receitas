<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'marca',
        'estoque',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
