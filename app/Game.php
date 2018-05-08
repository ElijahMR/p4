<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Game extends Model
{
    public function users() {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public static function seeIfGameExists($id) {
        $user = request()->user();
        $usersGames = User::with('games')->find($user->id);
        $usersGames = $usersGames->games()->pluck('games.id')->toArray();

        $gameExists = 0;
        foreach ($usersGames as $game) {
            if ($game == $id) {
                $gameExists = 1;
            }
        }

        $game = Game::find($id);

        if (!$game) {
            return 2;
        } elseif ($gameExists == 1) {
            return 1;
        } else {
            return 0;
        }
    }
}