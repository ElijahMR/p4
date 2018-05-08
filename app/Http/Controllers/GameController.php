<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    public function welcome()
    {
        $newGames = Game::orderBy('created_at', 'desc')->limit(5)->get();
        $latestGame = $newGames->first();

        return view('welcome')->with([
            'newGames' => $newGames,
            'latestGame' => $latestGame,
        ]);
    }
}
