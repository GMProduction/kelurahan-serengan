<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nama' => 'Pimpinan',
            'username' => 'pimpinan',
            'password' => Hash::make('pimpinan'),
            'role' => 'pimpinan',

        ]);

        User::create([

            'nama' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);
    }
}
