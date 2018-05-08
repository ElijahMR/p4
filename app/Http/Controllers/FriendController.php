<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FriendController extends Controller
{
    public function index()
    {
        return view('friends');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'friend_code' => 'required|string|max:8|min:8'
        ]);

        $user = request()->user();
        $friend = User::where('friend_code', '=', $request->friend_code)->first();

        if (!$friend) {
            $alert = ['danger', 'No user with the specified friend code exists.'];
        } else {
            $user->friends()->attach($friend->id);
            $alert = ['success', 'Friend successfully added.'];
        }
        return redirect('/friends')->with('alert', $alert);
    }

    public function delete($id)
    {
        $user = request()->user();
        $friend = User::where('id', '=', $id)->first();

        if (!$friend) {
            $alert = ['danger', 'No such user exists.'];
        } else {
            $user->friends()->detach($friend->id);
            $alert = ['success', 'Friend successfully removed.'];
        }
        return redirect('/friends')->with('alert', $alert);
    }
}
