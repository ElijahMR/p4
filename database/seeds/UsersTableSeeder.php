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
        $user = User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'name' => 'Jill Harvard', 'friend_code' => 'gameplay'],
            ['password' => Hash::make('helloworld')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'name' => 'Jamal Harvard', 'friend_code' => 'gamegame'],
            ['password' => Hash::make('helloworld')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'tom@harvard.edu', 'name' => 'Tom Harvard', 'friend_code' => 'gamehack'],
            ['password' => Hash::make('helloworld')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'jessica@harvard.edu', 'name' => 'Jessica Harvard', 'friend_code' => 'playgame'],
            ['password' => Hash::make('helloworld')
            ]);
    }
}
