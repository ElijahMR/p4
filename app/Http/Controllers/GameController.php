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

    public function show()
    {
        $allGames = Game::orderBy('created_at', 'desc')->get();

        return view('games.add')->with([
        'allGames' => $allGames,
        ]);
    }

    public function add($id)
    {
        $user = request()->user();
        $gameExists = Game::seeIfGameExists($id);

        if ($gameExists == 1) {
            $alert = ['danger', 'This game is already in your library.'];
        } elseif ($gameExists > 1) {
            $alert = ['danger', 'Game does not exist.'];
        } else {
            $user->games()->attach($id);
            $alert = ['success', 'Game successfully added to your library.'];
        }
        return redirect('/games')->with('alert', $alert);
    }

    public function remove($id)
    {
        $user = request()->user();
        $gameExists = Game::seeIfGameExists($id);

        if ($gameExists == 1) {
            $user->games()->detach($id);
            $alert = ['success', 'Game successfully removed from your library.'];
        } elseif ($gameExists > 1) {
            $alert = ['danger', 'Game does not exist.'];
        } else {
            $alert = ['danger', 'Game not in your library.'];
        }
        return redirect('/games')->with('alert', $alert);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'img_url' => 'required|url|max:191',
            'purchase_url' => 'required|url|max:191',
            'max_players' => 'required|numeric|max:64'
        ]);

        $game = new Game();
        $game->name = $request->name;
        $game->img_url = $request->img_url;
        $game->purchase_url = $request->purchase_url;
        $game->max_players = $request->max_players;
        $game->save();

        $alert = ['success', 'Game successfully added to the site library.'];

        return redirect('/games')->with('alert', $alert);
    }
}
