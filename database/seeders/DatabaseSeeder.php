<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LugarSeeder::class,
            AvistamentoSeeder::class,
            XenEspeSeeder::class,
            TipoAveSeeder::class,
            IndividuoSeeder::class,
            MediaIndividuoSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
