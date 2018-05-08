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
            ['Counter-Strike: Global Offensive', 'https://images.igdb.com/igdb/image/upload/t_cover_big/tjavlrx5y8lkol7uql40.jpg', 'https://store.steampowered.com/app/730', '10'],
            ['Overwatch', 'https://images.igdb.com/igdb/image/upload/t_cover_big/fen88hu0vhcf3k3owkxd.jpg', 'https://playoverwatch.com/en-us/', '12'],
            ['Fortnite', 'https://images.igdb.com/igdb/image/upload/t_cover_big/j7lazlgtms7siqn7fn5y.jpg', 'https://www.epicgames.com/fortnite/en-US/home', '4'],
            ['Worms W.M.D', 'https://images.igdb.com/igdb/image/upload/t_cover_big/p68pv3gyvbljw69zko3m.jpg', 'https://store.steampowered.com/app/327030', '6'],
            ['Killing Floor 2', 'https://images.igdb.com/igdb/image/upload/t_cover_big/ttt9dlzwz5msfkgfi4az.jpg', 'https://store.steampowered.com/app/232090', '12'],
            ['Saints Row IV', 'https://images.igdb.com/igdb/image/upload/t_cover_big/jsepbvicgnz6jxhd5pis.jpg', 'https://store.steampowered.com/app/206420', '2'],
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
