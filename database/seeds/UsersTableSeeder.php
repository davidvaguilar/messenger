<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'David',
          'email' => 'david.villegas.aguilar@gmail.com',
          'password' => bcrypt('123123')
        ]);

        User::create([
          'name' => 'Juan',
          'email' => 'juan@gmail.com',
          'password' => bcrypt('123123')
        ]);

        User::create([
          'name' => 'Pepe',
          'email' => 'pepe@gmail.com',
          'password' => bcrypt('123123')
        ]);
    }
}
