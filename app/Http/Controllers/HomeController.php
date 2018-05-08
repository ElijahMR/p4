<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = request()->user();

        #to-do make this user specific
        $newGames = Game::orderBy('created_at', 'desc')->limit(3)->get();

        return view('home')->with([
            'user' => $user,
            'newGames' => $newGames,
        ]);
    }
}
