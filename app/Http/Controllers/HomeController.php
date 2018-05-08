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
        #$user = request()->user();

        #to-do make this user specific
        $user = request()->user();
        $newGames = $user->games->sortByDesc('created_at')->splice(0, 3);

        return view('home')->with([
            'newGames' => $newGames,
        ]);
    }
}
