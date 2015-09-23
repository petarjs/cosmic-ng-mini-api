<?php

use Illuminate\Database\Seeder;

class AccomplishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Accomplishment::create([
          'description' => 'Woke up at 8:45 this morning!',
          'date' => '1443089400000',
          'coffees' => 13,
          'beers' => 1,
          'user_id' => \App\User::where('username', 'petar')->first()->id
        ]);

        \App\Accomplishment::create([
          'description' => 'Programmed for 8 hours straight :O',
          'date' => '1443049884406',
          'coffees' => 9,
          'beers' => 8,
          'user_id' => \App\User::where('username', 'petar')->first()->id
        ]);

        \App\Accomplishment::create([
          'description' => 'Read a book',
          'date' => '1443003000000',
          'coffees' => 3,
          'beers' => 4,
          'user_id' => \App\User::where('username', 'petar')->first()->id
        ]);
    }
}
