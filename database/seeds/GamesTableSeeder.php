<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            ['Counter-Strike: Global Offensive', 'https://steamcdn-a.akamaihd.net/steam/apps/730/header.jpg', 'https://store.steampowered.com/app/730', '10'],
            ['Overwatch', 'https://bnetproduct-a.akamaihd.net//ffa/96290efff85a74a90d3bc6d05041cf2b-prod-card-wide.jpg', 'https://playoverwatch.com/en-us/', '12'],
            ['Fortnite', 'https://i.ytimg.com/vi/wGB1aLDR2Es/maxresdefault.jpg', 'https://www.epicgames.com/fortnite/en-US/home', '4'],
            ['Worms W.M.D', 'https://steamcdn-a.akamaihd.net/steam/apps/327030/header.jpg', 'https://store.steampowered.com/app/327030', '6'],
            ['Killing Floor 2', 'https://steamcdn-a.akamaihd.net/steam/apps/232090/header.jpg', 'https://store.steampowered.com/app/232090', '12'],
            ['Saints Row IV', 'https://steamcdn-a.akamaihd.net/steam/apps/206420/header.jpg', 'https://store.steampowered.com/app/206420', '2'],
        ];

        $count = count($games);

        foreach ($games as $key => $gameData) {
            $game = new Game();

            $game->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $game->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $game->name = $gameData[0];
            $game->img_url = $gameData[1];
            $game->purchase_url = $gameData[2];
            $game->max_players = $gameData[3];

            $game->save();
            $count--;
        }
    }
}