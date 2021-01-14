<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\Receita;
use App\Models\ProdutoReceita;
use Illuminate\Database\Seeder;

class ProdutoReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Receita::all() as $receita) {
            $produtos = Produto::all()->where('user_id', $receita->user_id)->random(3);
            foreach($produtos as $produto) {
                ProdutoReceita::factory(1)->create([
                    'produto_id' => $produto->id,
                    'receita_id' => $receita->id
                ]);
            }
        }
    }
}
