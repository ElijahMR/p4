<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Game;

class UserGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            'jill@harvard.edu' => ['Worms W.M.D', 'Killing Floor 2', 'Overwatch', 'Saints Row IV'],
            'jamal@harvard.edu' => ['Killing Floor 2', 'Overwatch', 'Saints Row IV', 'Fortnite'],
            'tom@harvard.edu' => ['Worms W.M.D', 'Overwatch', 'Fortnite', 'Counter-Strike: Global Offensive'],
            'jessica@harvard.edu' => ['Killing Floor 2', 'Overwatch', 'Fortnite', 'Counter-Strike: Global Offensive'],
        ];

        foreach ($users as $email => $games) {
            $user = User::where('email', 'like', $email)->first();

            foreach ($games as $gameName) {
                $game = Game::where('name', 'LIKE', $gameName)->first();

                # Connect this tag to this book
                $user->games()->save($game);
            }
        }
    }
}
