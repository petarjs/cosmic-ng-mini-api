<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
          'username' => 'petar',
          'password' => Hash::make('petar')
        ]);

        \App\User::create([
          'username' => 'aca',
          'password' => Hash::make('aca')
        ]);
    }
}
