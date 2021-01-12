<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach($users as $user) {
            Produto::factory(5)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
