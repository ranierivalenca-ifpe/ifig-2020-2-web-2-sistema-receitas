<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Receita;
use Illuminate\Database\Seeder;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(User::all() as $user) {
            Receita::factory(2)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
