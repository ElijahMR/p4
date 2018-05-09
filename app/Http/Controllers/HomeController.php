<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $newGames = $user->games()->orderBy('game_user.created_at', 'desc')->limit(3)->get();

        return view('home')->with([
            'newGames' => $newGames,
        ]);
    }
}
